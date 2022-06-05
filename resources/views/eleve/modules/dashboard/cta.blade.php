<div class="mb-6">
    @if ($cta_alert)
        <a class="flex items-center justify-between p-4 mb-2 text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>Une alerte est en cours, merci de suivre les consignes de vos professeurs !</span>
            </div>
        </a>
    @endif

    @if ($cta_edt != null)
        @foreach ($cta_edt as $modif)
            <a class="flex items-center justify-between p-4 mb-2 text-sm font-semibold dark:text-blue-100 dark:bg-blue-600 text-blue-600 bg-blue-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray"
                href="{{ route('e-edt') }}">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Modification EDT ‒ <span class="font-medium">Votre cours <?php if ($modif['day'] == 0) {
                            echo "d'aujourd'hui";
                        } elseif ($modif['day'] == 1) {
                            echo "de demain";
                        } else {
                            echo "";
                        } ?> de <i>{{ $modif['matiere'] }}</i> avec
                    <i>{{ $modif['prof'] }}</i> a été <?php if ($modif['type'] == 0) {
                            echo 'modifié';
                        } else {
                            echo 'annulé';
                        } ?>.</span></span>
                </div>
            </a>
        @endforeach
    @endif

    @if ($cta_votes != null)
        @foreach ($cta_votes as $vote_item)
            <a class="flex items-center justify-between p-4 mb-2 text-sm font-semibold dark:text-teal-100 dark:bg-teal-600 text-teal-600 bg-teal-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray"
                href="">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Nouveau vote ‒ <span class="font-medium">{{ $vote_item['name'] }}</span></span>
                </div>
                <span>Voter &RightArrow;</span>
            </a>
        @endforeach
    @endif


    @if ($cta_vs != null)
        <a class="flex items-center justify-between p-4 mb-2 text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red"
            href="{{ route('e-viesco') }}">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>Nouvel événement Vie Scolaire ‒ <span class="font-medium">{{ $cta_vs }}</span></span>
            </div>
            <span>Consulter &RightArrow;</span>
        </a>
    @endif


    @if ($cta_infos != null)
        @foreach ($cta_infos as $info)
            <a class="flex items-center justify-between p-4 mb-2 text-sm font-semibold dark:text-green-100 dark:bg-green-600 text-green-600 bg-green-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray"
                href="{{ route('e-info') }}/view/{{ $info['id'] }}">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Nouvelle information ‒ <span class="font-medium">{{ $info['name'] }}</span></span>
                </div>
                <span>Consulter &RightArrow;</span>
            </a>
        @endforeach
    @endif

    @if ($cta_polls != null)
        @foreach ($cta_polls as $poll)
            <a class="flex items-center justify-between p-4 mb-2 text-sm font-semibold dark:text-green-100 dark:bg-green-600 text-green-600 bg-green-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray"
                href="{{ route('e-sondage') }}/view/{{ $poll['id'] }}">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span>Nouveau sondage ‒ <span class="font-medium">{{ $poll['name'] }}</span></span>
                </div>
                <span>Participer &RightArrow;</span>
            </a>
        @endforeach
    @endif
</div>
