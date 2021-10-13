<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainguard</title>

    <!-- icon -->
    <link rel="icon" href="/images/icon_logo.png">

    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="getInfo.php">About Depression</a></li>
            <li class="breadcrumb-item active" aria-current="page">Treatment</li>
        </ol>
    </nav>

    <div class="jumbotron depression-treatment jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading learnAboutDepression">Treatment</h1>
            <p class="lead banner-subheading learnAboutDepression">Everyone is different, there is no proven way of
                overcoming depression but a few of the suggestions listed below have helped others and could help you as
                well on the road to recovery.</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="container">
        <p class="info-mainHeading">Treatments for Depression</p>
        <p>
            Before a diagnosis or treatment, a health professional should conduct a thorough diagnostic evaluation,
            including an interview and a physical examination. In some cases, a blood test might be done to make sure
            the depression is not due to a medical condition like a thyroid problem or a vitamin deficiency (reversing
            the medical cause would alleviate the depression-like symptoms). The evaluation will identify specific
            symptoms and explore medical and family histories as well as cultural and environmental factors with the
            goal of arriving at a diagnosis and planning a course of action.
        </p>

        <p class="info-subHeading">Medication</p>
        <div class="treatment-info-section">
            <img src="images/Medication.jpg" alt="shelf filled with medications">
            <p>
                Brain chemistry may contribute to an individual’s depression and may factor into their treatment. For this
                reason, antidepressants might be prescribed to help modify one’s brain chemistry. These medications are not
                sedatives, “uppers” or tranquilizers. They are not habit-forming. Generally antidepressant medications have
                no stimulating effect on people not experiencing depression.
                Antidepressants may produce some improvement within the first week or two of use yet full benefits may not
                be seen for two to three months. If a patient feels little or no improvement after several weeks, his or her
                psychiatrist can alter the dose of the medication or add or substitute another antidepressant. In some
                situations other psychotropic medications may be helpful. It is important to let your doctor know if a
                medication does not work or if you experience side effects.
                Psychiatrists usually recommend that patients continue to take medication for six or more months after the
                symptoms have improved. Longer-term maintenance treatment may be suggested to decrease the risk of future
                episodes for certain people at high risk.
            </p>
        </div>

        <p class="info-subHeading">Psychotherapy</p>
        <div class="treatment-info-section">
            <img src="images/Group therapy.jpg" alt="People sitting for group therapy">
            <p>
                Psychotherapy or “talk therapy,” is sometimes used alone for treatment of mild depression; for moderate to
                severe
                depression, psychotherapy is often used along with antidepressant medications. Cognitive behavioral therapy
                (CBT) has been found to be effective in treating depression. CBT is a form of therapy focused on the problem
                solving in the present. CBT helps a person to recognize distorted/negative thinking with the goal of
                changing thoughts and behaviors to respond to challenges in a more positive manner.
                Psychotherapy may involve only the individual, but it can include others. For example, family or couples
                therapy can help address issues within these close relationships. Group therapy brings people with similar
                illnesses together in a supportive environment, and can assist the participant to learn how others cope in
                similar situations. Depending on the severity of the depression, treatment can take a few weeks or much
                longer. In many cases, significant improvement can be made in 10 to 15 sessions.
            </p>
        </div>

        <p class="info-subHeading">Electroconvulsive Therapy (ECT)</p>
        <div class="treatment-info-section">
            <img src="images/MH flower photo.jpg">
            <p>
                ECT is a medical treatment that has been most commonly reserved for patients with severe major
                depression who have not responded to other treatments. It involves a brief electrical stimulation of the
                brain while the patient is under anesthesia. A patient typically receives ECT two to three times a week
                for a total
                of six to 12 treatments. It is usually managed by a team of trained medical professionals including a
                psychiatrist,
                an anesthesiologist and a nurse or physician assistant. ECT has been used since the 1940s, and many
                years of research
                have led to major improvements and the recognition of its effectiveness as a mainstream rather than a
                "last resort"
                treatment.
            </p>
        </div>

        <p class="info-subHeading">Other</p>
        <div class="treatment-info-section">
            <img src="images/healthy-diet.jpg">
            <p>
            There are a number of other things people can do to help reduce the symptoms of depression.
            For many people, regular exercise helps create positive feeling and improves mood.
            Getting enough quality sleep on a regular basis, eating a healthy diet and avoiding alcohol (a depressant) can
            also help reduce symptoms of depression.
            </p>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>