@extends('client.app')

@section('content')
    <div class='intro'>
        <div class='tagline-container'>
            <h1 class='tagline'>Gjeni doktorin tuaj ne kohe reale nga paisja juaj mobile Android apo iOS.</h1>
            <div class='outer-container'>
                <div class='phone-container'>
                    <div class='left-phone'>
                        <div class='space-gray-phone-bg' id='space-gray-phone'></div>
                    </div>
                    <div class='right-phone'>
                        <div class='silver-phone-bg' id='intro-phone'>
                            <div class='message-width'>
                                <img class='ios ios-message-right message' id='ios-message-1' src='{{asset('client/images/top-bubble.png')}}'>
                                <img class='ios ios-message-left message' id='ios-message-2' src='{{asset('client/images/second-bubble.png')}}'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='content-container'>
        <div class='outer-container'>
            <div class='for-left'>
                <h2 class='perfect-for' id='perfect-for'>GjejDok ju ndihmon <br class="medium-screen"> <span id="blank-space" class="blank-space hide-at-first"><span id="js-rotating">te gjeni doktorin tuaj,te njiheni me mjekun,te kontakoni me mjekun</span></span></h2>
            </div>
        </div>
        <div class='features-container' id='features'>
            <div class='top-row'>
                <div class='first-feature-left'>
                    <div class='feature-wrapper'>
                        <h3 class='feature-heading' style="color: #028e9e;">Çfarë është GjejDok</h3>
                        <p class='feature-copy'>GjejDOK është aplikacioni që ju ndihmon të gjeni sa më thjesht dhe sa më shpejt një doktor.  </p>
                        <p class='feature-copy'>Thjesht zgjidhni rajonin dhe trajtimin për të cilin ju keni nevojë dhe menjëherë ju shfaqet një listë me mjekë të specializuar në atë fushë.</p>
                    </div>
                </div>
                <div class='first-feature-right'></div>
            </div>
            <div class='bottom-row'>
                <div class='second-feature-left'></div>
                <div class='second-feature-right'>
                    <div class='feature-wrapper'>
                        <h3 class='feature-heading' >Pse GjejDok</h3>
                        <p class='feature-copy' style="color: #ffffff;">Nëpërmjet gjejDOK ju do të njiheni më mirë me mjekun, duke marr informacion rreth edukimit, specializimit, eksperiencës si dhe të kontaktoni direkt me të.
                        </p>
                        <p class='feature-copy' style="color: #ffffff;">Me këtë aplikacion kontakti i pacientit me mjekun është më i thjesht.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='app-store-container' id='download'>
            <div class='app-store-content'>
                <h4 class='app-store-heading'>
                    <a href='#'>Shkarkoni GjejDok në App Store dhe Play Store </a>
                </h4>
                <div class='app-store-button'>
                    <a href='https://itunes.apple.com/al/app/gjejdok/id1063109745?mt=8' target="_blank">
                        <img class='app-store' src='{{asset('client/images/app-store.png')}}'>
                    </a>

                    <a href='https://play.google.com/store/apps/details?id=me.customeyes.android.finddoc&hl=en' target="_blank">
                        <img class='app-store' src='{{asset('client/images/play-store.png')}}'>
                    </a>
                </div>
            </div>
        </div>
@endsection
