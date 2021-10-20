#
# Title: Depression Statistics - Main.R
# Purpose: Generate Depression Statistics dashboard
#
# Inputs:
# (a) VPHS Data 2015 - 2019
# (b) Census data - Number of people by suburb
# (c) Census data - Number of people aged 15-24 years old per country of birth by suburb
# (d) Census data - Number of people in university/tertiary aged 15-24 years old per
#----------------------------------------------------------------

rm(list=ls())

#----------------------------------------------------------------
# Load libraries needed for result processing
#----------------------------------------------------------------

library(dplyr, warn.conflicts = FALSE) 
library(readxl)
library(stringr)
library(tidyr)
library(ggplot2)
library(janitor)
# library(skimr)
library(flexdashboard)
library(DT)
library(htmltools)
library(plotly)
library(ggrepel)
library(ggtext)
library(maps)
# library(futile.logger)
# library(tryCatchLog)

#-------------------------------------------------------------------------------
# Read & clean input files - Suburbs
#-------------------------------------------------------------------------------

main_dir <- "/Users/valentina/Google Drive/Monash University/Monash Masters/FIT5120 Industry Experience/Statistics dashboard/Input files"

setwd(main_dir)

#suburb names
sub_name <- read_excel("Suburb_Name.xlsx")

# people aged 15-24 by suburb
pp_sub <- read.csv("./2016Census_G03_VIC_SSC.csv",
                   stringsAsFactors = F, na.strings = c("")) %>%
  rename("Suburb_Code" = "SSC_CODE_2016")

pp_sub <- left_join(pp_sub,sub_name,by="Suburb_Code") %>%
  select(Suburb_Code,Suburb_Name,Total_15_24_yr) %>%
  arrange(Suburb_Code,Suburb_Name,Total_15_24_yr)
  
pp_sub$Suburb_Code <- gsub("^SSC","",pp_sub$Suburb_Code)

# country of birth counts by suburb
cob_sub1 <- read.csv("./2016Census_G09F_VIC_SSC.csv",
                    stringsAsFactors = F, na.strings = c("")) %>%
  rename("Suburb_Code" = "SSC_CODE_2016") %>%
  select(-starts_with("F")) %>%
  select("Suburb_Code",ends_with("15_24"))

cob_sub2 <- read.csv("./2016Census_G09G_VIC_SSC.csv",
                      stringsAsFactors = F, na.strings = c("")) %>%
  rename("Suburb_Code" = "SSC_CODE_2016") %>%
  select("Suburb_Code",ends_with("15_24"))

cob_sub3 <- read.csv("./2016Census_G09H_VIC_SSC.csv",
                      stringsAsFactors = F, na.strings = c("")) %>%
  rename("Suburb_Code" = "SSC_CODE_2016") %>%
  select("Suburb_Code",ends_with("15_24"))

# merge cob files together and get suburb name
cob_sub_merge1 <- left_join(cob_sub1,cob_sub2,by="Suburb_Code")
cob_sub_merge2 <- left_join(cob_sub_merge1,cob_sub3,by="Suburb_Code")
cob_sub_merge3 <- left_join(cob_sub_merge2,sub_name,by="Suburb_Code") %>%
  select(Suburb_Code,Suburb_Name,everything()) %>%
  select(-starts_with("P_Elsewhere"),-starts_with("P_COB"),-starts_with("P_Tot"))

names(cob_sub_merge3) <- gsub("^P_|_15_24$", "" , names(cob_sub_merge3))

# cob_sub_merge3$Suburb_Name <- gsub("\\(Vic\\.\\)", "" , cob_sub_merge3$Suburb_Name)

cob_sub_merge3$Suburb_Code <- gsub("^SSC","",cob_sub_merge3$Suburb_Code)

# persons in university aged 15-24 by suburb
uni_sub <- read.csv("./2016Census_G15_VIC_SSC.csv",
                     stringsAsFactors = F, na.strings = c("")) %>%
  rename("Suburb_Code" = "SSC_CODE_2016") %>%
  select("Suburb_Code",starts_with("Uni")) %>%
  select("Suburb_Code",ends_with("15_24_P")) %>%
  mutate(Uni_Fulltime_15_24_P=as.numeric(Uni_Fulltime_15_24_P),
         Uni_Parttime_15_24_P=as.numeric(Uni_Parttime_15_24_P)) %>%
  mutate("Tot_15_24_FtPt" = rowSums(.[2:3])) %>%
  select(Suburb_Code,Tot_15_24_FtPt)

uni_sub_merge <- left_join(uni_sub,sub_name,by="Suburb_Code") %>%
  select(Suburb_Code,Suburb_Name,everything())

uni_sub_merge$Suburb_Code <- gsub("^SSC","",uni_sub_merge$Suburb_Code)

#-------------------------------------------------------------------------------
# Read & clean input files - Postcodes
#-------------------------------------------------------------------------------

# people aged 15-24 by suburb
pp_poa <- read.csv("./2016Census_G03_VIC_POA.csv",
                   stringsAsFactors = F, na.strings = c("")) %>%
  rename("Postcode" = "POA_CODE_2016") %>%
  select(Postcode,Total_15_24_yr)

pp_poa <- pp_poa %>% 
  select(Postcode,Total_15_24_yr) %>%
  arrange(Postcode,Total_15_24_yr)

pp_poa$Postcode <- gsub("^POA", "" , pp_poa$Postcode)

# country of birth counts by suburb
cob_poa1 <- read.csv("./2016Census_G09F_VIC_POA.csv",
                     stringsAsFactors = F, na.strings = c("")) %>%
  rename("Postcode" = "POA_CODE_2016") %>%
  select(-starts_with("F")) %>%
  select("Postcode",ends_with("15_24"))

cob_poa2 <- read.csv("./2016Census_G09G_VIC_POA.csv",
                     stringsAsFactors = F, na.strings = c("")) %>%
  rename("Postcode" = "POA_CODE_2016") %>%
  select("Postcode",ends_with("15_24"))

cob_poa3 <- read.csv("./2016Census_G09H_VIC_POA.csv",
                     stringsAsFactors = F, na.strings = c("")) %>%
  rename("Postcode" = "POA_CODE_2016") %>%
  select("Postcode",ends_with("15_24"))

# merge cob files together and get suburb name
cob_poa_merge1 <- left_join(cob_poa1,cob_poa2,by="Postcode")
cob_poa_merge2 <- left_join(cob_poa_merge1,cob_poa3,by="Postcode")
cob_poa_merge3 <- cob_poa_merge2 %>%
  select(-starts_with("P_Elsewhere"),-starts_with("P_COB"),-starts_with("P_Tot"))

names(cob_poa_merge3) <- gsub("^P_|_15_24$", "" , names(cob_poa_merge3))

cob_poa_merge3$Postcode <- gsub("^POA", "" , cob_poa_merge3$Postcode)

# persons in university aged 15-24 by suburb
uni_poa <- read.csv("./2016Census_G15_VIC_POA.csv",
                    stringsAsFactors = F, na.strings = c("")) %>%
  rename("Postcode" = "POA_CODE_2016") %>%
  select("Postcode",starts_with("Uni")) %>%
  select("Postcode",ends_with("15_24_P")) %>%
  mutate(Uni_Fulltime_15_24_P=as.numeric(Uni_Fulltime_15_24_P),
         Uni_Parttime_15_24_P=as.numeric(Uni_Parttime_15_24_P)) %>%
  mutate("Tot_15_24_FtPt" = rowSums(.[2:3])) %>%
  select(Postcode,Tot_15_24_FtPt)

#-------------------------------------------------------------------------------
# Read & clean input files - VPHS
#-------------------------------------------------------------------------------

# VPHS 2015-19 - all sheets
psy_dist <- read_excel("VPHS 2015 - 2019.xlsx",sheet = "Level of Psych distress")

diag_anxdep <- read_excel("VPHS 2015 - 2019.xlsx",sheet = "Diag anxiety or depression")

# help_lastyear <- read_excel("VPHS 2015 - 2019.xlsx",sheet = "Pro help for MH last year")
# 
# health_status <- read_excel("VPHS 2015 - 2019.xlsx",sheet = "Self-reported health status")
# 
# life_satisf <- read_excel("VPHS 2015 - 2019.xlsx",sheet = "Life satisfaction")
# 
# feel_ww <- read_excel("VPHS 2015 - 2019.xlsx",sheet = "Feeling of life being ww")

#psy dist
psy_dist2 <- psy_dist %>%
  gather(key,value,-Year) %>%
  mutate(value=as.integer(value))


#-------------------------------------------------------------------------------
# Generate Outputs
#-------------------------------------------------------------------------------

#create folder if don't exist

output_files <- paste(main_dir,"Output_files_final", sep="/")

if(!dir.exists(output_files)){

  dir.create(output_files)
}

setwd(output_files)

# write csv
#Census data
write.csv(pp_sub, "People aged 15to24 by Suburb.csv", row.names = F, na= "")

write.csv(cob_sub_merge3, "Country of birth of people aged 15to24 by Suburb.csv", row.names = F, na= "")

write.csv(uni_sub_merge, "University people aged 15to24 by Suburb.csv", row.names = F, na= "")

# write.csv(pp_poa, "People aged 15to24 by Postcode.csv", row.names = F, na= "")
# 
# write.csv(cob_poa_merge3,"Country of birth of people aged 15to24 by Postcode.csv", row.names = F, na= "")
# 
# write.csv(uni_poa, "University people aged 15to24 by Postcode.csv", row.names = F, na= "")
# # 
#VPHS data
write.csv(psy_dist, "Level of psychological distress 2015to19.csv", row.names = F, na= "")
# 
write.csv(diag_anxdep, "Ever diagnosed with anxiety or depression 2015to19.csv", row.names = F, na= "")
# 
# write.csv(help_lastyear, "Sought professional help for MH in previous year 2015to19.csv", row.names = F, na= "")
# 
# write.csv(health_status, "Self-reported health status 2015to19.csv", row.names = F, na= "")
# 
# write.csv(life_satisf, "Life satisfaction 2015to19.csv", row.names = F, na= "")
# 
# write.csv(feel_ww, "Feeling worthwhile 2015to19.csv", row.names = F, na= "")

#-------------------------------------------------------------------------------
# Statistics Dashboard
#-------------------------------------------------------------------------------
# setwd(output_files)

# rmarkdown::render("Depression_Statistics.Rmd",
#                   output_format = "html_document",
#                   output_options = c("self-contained = TRUE"),
#                   quiet = TRUE)


# rmarkdown::render("Depression_Statistics.Rmd",
#                   output_file = "Depression Statistics.html",
#                   output_dir = "C:/Users/Valentina.Ho/OneDrive - RACGP/Other/Output_files")

# # Level of Psychological distress
# 
# name_lab <- colnames(psy_dist[-1])
# 
# psy_dist_graph <- psy_dist %>%
#   gather(key,value,-Year) %>%
#   mutate(value=as.integer(value))
# 
# psy_dist_graph$key <- factor(psy_dist_graph$key,levels=c('Low','Moderate','High','Very_High', 'High_or_Very_High'))
# sizes <- c('Low' = 1, 'Moderate' = 1, 'High' = 1, 'Very_High' = 1, 'High_or_Very_High' = 1)
# 
# 
# ggplot(psy_dist_graph,aes(x=Year,y=value,group=key,color=key))+
#   geom_point()+
#   labs(title='Compared to the previous years, has the level of psychological distress changed for Victorian adults?',
#        subtitle = "The line chart visualizes the proportion (%) of adult population (18+ years), by level of psychological distress changes in Victoria over 2015-2019. The higher level of psychological distress for was the highest in 2019.",
#        caption = ".  Data obtained from Victorian Population Health Survey",
#        x='', 
#        y='Number of people') +
#   geom_line(aes(colour = key, size = key, group = key)) +
#   scale_size_manual(values = sizes) +
#   scale_color_manual(values = c(rcartocolor::carto_pal(name = "Bold"), "grey50"))


# # read shape file
# aus_sub_shp <- read_sf("C:/Users/Valentina.Ho/OneDrive - RACGP/Other/Output_files","SSC_2016_AUST")
# 
# #filter the Australian Suburbs shapefile for only Victoria
# 
# aus_sub_vic_shp <- aus_sub_shp %>%
#   filter(STE_CODE16 == 2)
# 
# # Join Suburb and University status by their Suburb code
# sub_shp_uni <- merge(aus_sub_vic_shp,pp_sub,
#                      by.x = "SSC_CODE16", by.y = "Suburb_Code")
# 
# # plot map using university census data
# ggplot() +
#   geom_sf(data = sub_shp_uni,
#           aes(fill = Total_15_24_yr)) +
#   ggtitle("Suburb") +
#   xlab("Longitude") +
#   ylab("Latitude") +
#   theme_bw() +
#   theme(legend.position = "right",
#         legend.title = element_text("University Status"))

# pp_sub1 <- pp_sub %>%
#   select(Suburb_Name,Total_15_24_yr) %>%
#   arrange(desc(Total_15_24_yr))
# 
# names(pp_sub1) <- c('Suburb','Total no. people aged 15-24')
# 
# len_ppsub <- length(pp_sub1)
# 
# datatable(pp_sub1,filter="top",caption = "Number of people aged 15-24 per Suburb in Victoria",options=list(dom='lrtp',scrollX=T))
