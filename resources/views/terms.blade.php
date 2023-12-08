@extends('layout')

@section('content')

<div class="termspage">

    <section class="termspage__top-section">
        <div class="termspage__top-section--title">
            <p class="termspage__top-title--white-color">Terms &</p>
            <p class="termspage__top-title--main-color">Conditions</p>
        </div>
    </section>

    <section class="termspage__bottom-section">
        <div class="termspage__bottom-section--content">
            <h3 class="termspage__bottom-section-- main-title">Terms and Conditions for LëtzLaf meetup website</h3>
            
            <h4 class="termspage__bottom-section-- secondary-title">1. Acceptance of Terms</h4>
            
            <p>By accessing or using the LëtzLaf meetup website, you agree to comply with and be bound by these Terms and Conditions. If you do not agree with any part of these terms, you may not use the website.</p> 
            
            <h4>2. Participation Eligibility</h4>
            
            <p>To use the LëtzLaf website, you must be at least 18 years old. By using the website, you represent and warrant that you are 18 years of age or older.</p> 
            
            <h4>3. Event Participation and Photography Consent</h4>
            
            <p>By participating in organized runs facilitated through the LëtzLaf website, you grant LëtzLaf  the irrevocable right and permission to photograph and/or record you during the event. You understand and agree that these photographs and/or recordings may be used for promotional, marketing, and commercial purposes, including but not limited to the website, social media, and other promotional materials.</p> 
            
            <h4>4. Use of Personal Information</h4>
            
            <p>LëtzLaf may collect and use your personal information in accordance with our Privacy Policy. By using the LëtzLaf website, you consent to the collection and use of your personal information as described in the Privacy Policy.</p> 
            
            <h4>5. Code of Conduct</h4>
            
            <p>All members agree to adhere to a code of conduct during organized runs. This includes respecting fellow participants, event organizers, and following all safety guidelines. LëtzLaf reserves the right to remove any participant from an event for behavior that violates the code of conduct.</p> 
            
            <h4>6. Intellectual Property</h4>
            
            <p>All content and materials on the LëtzLaf website, including but not limited to logos, text, graphics, photographs, and software, are the property of LëtzLaf and are protected by copyright and other intellectual property laws.</p> 
            
            <h4>7. Disclaimer of Liability</h4>
            
            <p>LëtzLaf is not responsible for any injury, damage, or loss incurred during or as a result of participating in organized runs. Participants acknowledge the inherent risks associated with physical activity and voluntarily assume those risks.</p> 
            
            <h4>8. Modification of Terms</h4>
            
            <p>LëtzLaf reserves the right to modify these Terms and Conditions at any time. It is your responsibility to review these terms periodically. Your continued use of the website following the posting of changes will be deemed as your acceptance of those changes.</p> 
            
            <h4>9. Termination of Membership</h4>
            
            <p>LëtzLaf reserves the right to terminate or suspend your membership and access to the website at any time, without notice, for conduct that we believe violates these Terms and Conditions or is harmful to other members or third parties, or for any other reason.</p> 
            
            <h4>10. Governing Law</h4>
            
            <p>These Terms and Conditions are governed by and construed in accordance with the laws of The Grand Duchy of Luxembourg. Any disputes arising under or in connection with these terms shall be subject to the exclusive jurisdiction of the courts in The Grand Duchy of Luxembourg.</p> 
            
            <p>By using the website, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.

            </p>
        </div>
    </section >
</div>
@endsection

<style>

.termspage{
    width: 700px ;
    background-color: white;
    margin: 0 25%;
}

.termspage__top-section{
    background-image: url('/images/kristian-egelund-wmdcUQ0CJ4c-unsplash.jpg');
    height: 400px;
    width: 100%;
    background-size: contain, cover; 
    background-repeat: no-repeat;
    font-size: 40px;     
    text-align: center;
}

.termspage__top-section--title{
    padding: 200px 50px 0 0 ;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
}

.termspage__top-title--white-color{
    color: var(--card-bg);
    margin: 0;
}

.termspage__top-title--main-color{
    color: var( --primary-color);
    margin: 0;
}

.termspage__bottom-section{
    width: 707px;
}

.termspage__bottom-section--content{
    padding: 20px;
}
</style>
