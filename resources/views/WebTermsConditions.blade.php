@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebTermsConditions.css">
 @push('title')
    <title>Terms and conditions</title>


@section('container')


<div class="banner">
     <h2>Terms and Conditions</h2>
     <p>READ ALL PROPERLY</p>

</div>

<div class="container">

    <header>
        <h1>Terms and Conditions</h1>
    </header>
    <section class="terms-section">
        <div class="terms-content">
            <h2>General Terms</h2>
            <p>By becoming a member of our gym, you agree to abide by the following terms and conditions. These terms apply to all members and visitors.</p>

            <h2>Rules and Regulations</h2>
            <ul>
                <li>Members must present a valid membership card upon entry.</li>
                <li>Appropriate gym attire and footwear are required at all times.</li>
                <li>No outside food or beverages are allowed in the gym premises.</li>
                <li>Smoking and alcohol consumption are strictly prohibited.</li>
                <li>Personal belongings should be stored in designated lockers.</li>
            </ul>

            <h2>Equipment Use</h2>
            <p>Members are expected to use gym equipment responsibly and follow the guidelines provided:</p>
            <ul>
                <li>Wipe down equipment after use with the provided disinfectant wipes.</li>
                <li>Do not drop or misuse weights and other equipment.</li>
                <li>Report any damaged or malfunctioning equipment to the staff immediately.</li>
                <li>Return all equipment to its proper place after use.</li>
            </ul>
            
            <h2>Discipline</h2>
            <p>Maintaining a respectful and safe environment is paramount. Members must adhere to the following:</p>
            <ul>
                <li>Respect the privacy and rights of other members.</li>
                <li>Avoid using offensive language or engaging in inappropriate behavior.</li>
                <li>Follow instructions and guidelines provided by the gym staff.</li>
                <li>Non-compliance with rules may result in suspension or termination of membership.</li>
            </ul>

            <h2>Agreements</h2>
            <p>By joining our gym, you agree to the following:</p>
            <ul>
                <li>Membership fees are non-transferable and non-refundable.</li>
                <li>Members are responsible for updating their contact information with the gym.</li>
                <li>The gym is not liable for any personal injuries or loss of property.</li>
                <li>Members consent to the use of their images in gym marketing materials.</li>
            </ul>
            
            <h2>Refund Policy</h2>
            <p>Our refund policy is as follows:</p>
            <ul>
                <li>Refunds are only provided for medical reasons with a valid doctor's note.</li>
                <li>No refunds will be given for unused membership periods.</li>
                <li>Refund requests must be submitted in writing and will be processed within 30 days.</li>
            </ul>
        </div>
    </section>


</div>


    @endsection