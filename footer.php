<?php wp_footer(); ?>
    </main>
    <footer class="footer">
        <div class="footer__container">
            <figure class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt=""></figure>
            <a href="#" class="footer__up" title="Voltar para o início"><svg width="34" height="44" viewBox="0 0 34 44" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.2219 17.7821L17.0001 0.820801L0.778236 17.7821C0.586843 17.9353 0.428999 18.1299 0.315389 18.3528C0.20178 18.5757 0.135059 18.8216 0.119741 19.0739C0.104423 19.3263 0.140868 19.5791 0.226606 19.8153C0.312345 20.0516 0.445376 20.2657 0.616694 20.4432C0.788013 20.6207 0.993618 20.7575 1.21959 20.8442C1.44556 20.9309 1.68663 20.9656 1.92647 20.9459C2.1663 20.9262 2.39931 20.8526 2.60972 20.73C2.82013 20.6074 3.00302 20.4388 3.14602 20.2354L15.3208 7.54532V41.3091C15.3208 41.7772 15.4977 42.2262 15.8126 42.5572C16.1276 42.8881 16.5547 43.0741 17.0001 43.0741C17.4454 43.0741 17.8726 42.8881 18.1875 42.5572C18.5024 42.2262 18.6793 41.7772 18.6793 41.3091V7.54532L30.8541 20.2354C31.1703 20.5654 31.5983 20.7499 32.044 20.7483C32.4896 20.7466 32.9163 20.559 33.2303 20.2266C33.5443 19.8943 33.7198 19.4444 33.7182 18.9761C33.7167 18.5077 33.5381 18.0592 33.2219 17.7292V17.7821Z" fill="white"/></svg></a>

            <div class="footer__foot">
                <p class="footer__copyright">Copyright &copy; <?php echo date('Y'); ?> Holloway Studio. Todos os direitos reservados.</p>

                <div class="footer__social">
                    <!-- <figure><a href="" title="Facebook" target="_blank"><svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.06332 24V12.7385H0V8.68382H3.06332V5.2206C3.06332 2.49917 4.87284 0 9.04235 0C10.7305 0 11.9788 0.15732 11.9788 0.15732L11.8805 3.9437C11.8805 3.9437 10.6074 3.93166 9.21814 3.93166C7.71455 3.93166 7.47365 4.60522 7.47365 5.72316V8.68382H12L11.8031 12.7385H7.47365V24H3.06332Z" fill="white"/></svg></a></figure> -->
                    <!-- <figure><a href="" title="Instagram" target="_blank"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.4966 5.84284C8.94743 5.84284 6.08305 8.5927 6.08305 12C6.08305 15.4073 8.94743 18.1572 12.4966 18.1572C16.0458 18.1572 18.9102 15.4073 18.9102 12C18.9102 8.5927 16.0458 5.84284 12.4966 5.84284ZM12.4966 16.0017C10.2014 16.0017 8.32828 14.2035 8.32828 12C8.32828 9.79651 10.2014 7.9983 12.4966 7.9983C14.7919 7.9983 16.665 9.79651 16.665 12C16.665 14.2035 14.7919 16.0017 12.4966 16.0017ZM19.1729 4.1557C18.3442 4.1557 17.675 4.79813 17.675 5.59367C17.675 6.38921 18.3442 7.03164 19.1729 7.03164C20.0016 7.03164 20.6708 6.39221 20.6708 5.59367C20.671 5.40477 20.6324 5.21767 20.5572 5.0431C20.4821 4.86853 20.3717 4.70992 20.2326 4.57634C20.0935 4.44277 19.9282 4.33686 19.7464 4.26468C19.5646 4.1925 19.3697 4.15546 19.1729 4.1557ZM24.9986 12C24.9986 10.3429 25.0142 8.70077 24.9173 7.04665C24.8204 5.12536 24.3638 3.4202 22.9004 2.01525C21.4338 0.607302 19.6607 0.172008 17.6594 0.0789456C15.9333 -0.0141173 14.2228 0.000892936 12.4998 0.000892936C10.7736 0.000892936 9.06313 -0.0141173 7.34013 0.0789456C5.33881 0.172008 3.56265 0.610305 2.09918 2.01525C0.632595 3.42321 0.179172 5.12536 0.0822335 7.04665C-0.0147052 8.70377 0.000930124 10.3459 0.000930124 12C0.000930124 13.6541 -0.0147052 15.2992 0.0822335 16.9533C0.179172 18.8746 0.635722 20.5798 2.09918 21.9847C3.56577 23.3927 5.33881 23.828 7.34013 23.9211C9.06626 24.0141 10.7768 23.9991 12.4998 23.9991C14.2259 23.9991 15.9364 24.0141 17.6594 23.9211C19.6607 23.828 21.4369 23.3897 22.9004 21.9847C24.3669 20.5768 24.8204 18.8746 24.9173 16.9533C25.0174 15.2992 24.9986 13.6571 24.9986 12ZM22.2468 19.0788C22.0185 19.6252 21.7433 20.0334 21.3024 20.4537C20.8615 20.877 20.4394 21.1412 19.8702 21.3603C18.2254 21.9877 14.3197 21.8467 12.4966 21.8467C10.6736 21.8467 6.76475 21.9877 5.11992 21.3633C4.55079 21.1442 4.12551 20.88 3.68773 20.4567C3.24681 20.0334 2.97163 19.6282 2.74336 19.0818C2.09293 17.4997 2.2399 13.7502 2.2399 12C2.2399 10.2498 2.09293 6.49728 2.74336 4.91822C2.97163 4.37185 3.24681 3.96357 3.68773 3.54329C4.12864 3.123 4.55079 2.85582 5.11992 2.63667C6.76475 2.01225 10.6736 2.15335 12.4966 2.15335C14.3197 2.15335 18.2285 2.01225 19.8734 2.63667C20.4425 2.85582 20.8678 3.12 21.3056 3.54329C21.7465 3.96657 22.0216 4.37185 22.2499 4.91822C22.9004 6.49728 22.7534 10.2498 22.7534 12C22.7534 13.7502 22.9004 17.4997 22.2468 19.0788Z" fill="white"/></svg></a></figure> -->
                    <figure><a href="https://www.behance.net/sabrinapasti" title="Behance" target="_blank"><svg width="34" height="22" viewBox="0 0 34 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1989 1.45527H30.6829V3.57681H22.1989V1.45527ZM13.6978 9.84937C15.5732 8.92449 16.5556 7.51743 16.5556 5.3433C16.5556 1.04324 13.4512 0 9.86617 0H0V21.5836H10.1426C13.9445 21.5836 17.5124 19.6987 17.5124 15.3154C17.5124 12.6065 16.2707 10.6033 13.6978 9.84937ZM4.60138 3.68201H8.91782C10.5806 3.68201 12.0733 4.15979 12.0733 6.14983C12.0733 7.98207 10.9123 8.71847 9.26654 8.71847H4.60138V3.68201ZM9.5132 17.9191H4.59712V11.9753H9.61101C11.6353 11.9753 12.9153 12.8476 12.9153 15.0568C12.9153 17.2309 11.3886 17.9191 9.5132 17.9191ZM34 13.996C34 9.37159 31.3761 5.51863 26.6301 5.51863C22.016 5.51863 18.8776 9.09982 18.8776 13.7944C18.8776 18.6599 21.8502 22 26.6301 22C30.2492 22 32.5924 20.3212 33.7193 16.74H30.0493C29.6495 18.0769 28.025 18.7782 26.762 18.7782C24.321 18.7782 23.0452 17.3054 23.0452 14.8026H33.9702C33.983 14.5439 34 14.2722 34 13.996ZM23.0452 12.0936C23.177 10.0379 24.5081 8.75354 26.4983 8.75354C28.5906 8.75354 29.6368 10.0203 29.8196 12.0936H23.0452Z" fill="white"/></svg></a></figure>
                    <!-- <figure><a href="" title="LinkedIn" target="_blank"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.04 0H0.96C0.429 0 0 0.429 0 0.96V23.04C0 23.571 0.429 24 0.96 24H23.04C23.571 24 24 23.571 24 23.04V0.96C24 0.429 23.571 0 23.04 0ZM7.119 20.451H3.558V8.997H7.119V20.451ZM5.34 7.431C4.93178 7.431 4.53273 7.30995 4.1933 7.08315C3.85388 6.85636 3.58933 6.534 3.43311 6.15686C3.27689 5.77971 3.23602 5.36471 3.31566 4.96433C3.3953 4.56396 3.59188 4.19619 3.88053 3.90753C4.16919 3.61888 4.53696 3.4223 4.93733 3.34266C5.33771 3.26302 5.75271 3.30389 6.12986 3.46011C6.507 3.61633 6.82936 3.88088 7.05615 4.2203C7.28295 4.55973 7.404 4.95878 7.404 5.367C7.401 6.507 6.477 7.431 5.34 7.431ZM20.451 20.451H16.893V14.88C16.893 13.551 16.869 11.844 15.042 11.844C13.191 11.844 12.906 13.29 12.906 14.784V20.451H9.351V8.997H12.765V10.563H12.813C13.287 9.663 14.448 8.712 16.182 8.712C19.788 8.712 20.451 11.085 20.451 14.169V20.451Z" fill="white"/></svg></a></figure> -->
                </div>
            </div>
        </div>
        <div class="blob blob--7"><svg width="389" height="408" viewBox="0 0 389 408" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_f_107_30)"><path d="M142.382 311.163C69.559 338.075 85.4261 149.494 151.017 107.957C153.299 106.511 155.698 105.147 158.212 103.874C209.499 77.9184 277.536 109.765 292.904 140.131C308.273 170.497 199.75 282.507 148.463 308.463C146.228 309.594 144.206 310.489 142.382 311.163Z" fill="url(#paint0_linear_107_30)"/></g><defs><filter id="filter0_f_107_30" x="0.390869" y="0.309082" width="387.99" height="407.471" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feGaussianBlur stdDeviation="47" result="effect1_foregroundBlur_107_30"/></filter><linearGradient id="paint0_linear_107_30" x1="341.072" y1="147.817" x2="128.753" y2="98.3578" gradientUnits="userSpaceOnUse"><stop offset="0.0285893" stop-color="#C1CFFF"/><stop offset="0.351797" stop-color="#002ECC"/><stop offset="0.620852" stop-color="#001DB3"/><stop offset="1" stop-color="#5200FF"/></linearGradient></defs></svg></div>
    </footer>
    <div class="holloway-cursor"></div>
</body>
</html>