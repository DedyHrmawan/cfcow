<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('home'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Beranda</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'pendaftaran' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('pendaftaran'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                        <rect y="6" width="16" height="3" rx="1.5" fill="currentColor" />
                        <rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="currentColor" />
                        <rect opacity="0.3" width="12" height="3" rx="1.5" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Pendaftaran Pakar</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'admin' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('admin'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Admin Pakar</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'penyakit' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('penyakit'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M17.2 9.10509C17.0674 8.87541 17.0315 8.60248 17.1001 8.3463C17.1687 8.09013 17.3363 7.87161 17.566 7.739L18.566 7.16307C18.4499 6.93158 18.4287 6.66389 18.5068 6.41698C18.5849 6.17007 18.7562 5.96332 18.9843 5.84069C19.2124 5.71805 19.4793 5.68923 19.7283 5.76024C19.9773 5.83126 20.1889 5.99657 20.318 6.22106L21.278 7.88305C21.3996 8.11038 21.4287 8.37585 21.3593 8.62413C21.2898 8.87242 21.1271 9.08435 20.9052 9.21557C20.6833 9.34678 20.4193 9.38714 20.1682 9.32836C19.9172 9.26957 19.6986 9.11612 19.558 8.90001L18.568 9.47106C18.4161 9.55914 18.2436 9.60542 18.068 9.60509C17.8921 9.60544 17.7193 9.55933 17.5669 9.47155C17.4145 9.38376 17.288 9.2574 17.2 9.10509ZM20.89 14.9241C20.6698 14.7983 20.4098 14.7615 20.1632 14.8212C19.9167 14.8808 19.7023 15.0325 19.564 15.2451L18.564 14.6691C18.4502 14.6024 18.3244 14.5589 18.1937 14.541C18.0631 14.5231 17.9301 14.5312 17.8026 14.5649C17.6751 14.5986 17.5556 14.6573 17.4508 14.7374C17.3461 14.8175 17.2582 14.9175 17.1922 15.0317C17.1263 15.1459 17.0836 15.272 17.0666 15.4028C17.0496 15.5336 17.0587 15.6664 17.0932 15.7937C17.1278 15.921 17.1871 16.0402 17.268 16.1444C17.3488 16.2486 17.4494 16.3359 17.564 16.4011L18.555 16.973C18.4428 17.2022 18.4224 17.4655 18.498 17.7092C18.5736 17.9529 18.7395 18.1586 18.9617 18.2839C19.184 18.4093 19.4457 18.445 19.6934 18.3837C19.9411 18.3223 20.1559 18.1687 20.294 17.9541L21.254 16.291C21.3875 16.0621 21.4247 15.7896 21.3574 15.5333C21.2901 15.277 21.1238 15.0578 20.895 14.9241H20.89ZM5.44199 14.739L4.57599 15.239C4.44244 15.0112 4.22423 14.8456 3.96894 14.7781C3.71364 14.7106 3.44201 14.7467 3.21332 14.8788C2.98464 15.0108 2.81745 15.2279 2.74827 15.4828C2.67908 15.7376 2.71348 16.0094 2.844 16.239L3.844 17.9711C3.90918 18.0857 3.99639 18.1863 4.10062 18.2671C4.20485 18.3479 4.32403 18.4073 4.4513 18.4419C4.57857 18.4764 4.71145 18.4855 4.84223 18.4685C4.97301 18.4515 5.09911 18.4087 5.21332 18.3428C5.32753 18.2768 5.42759 18.189 5.5077 18.0842C5.5878 17.9795 5.64638 17.8599 5.68009 17.7324C5.7138 17.6049 5.72197 17.472 5.70411 17.3413C5.68624 17.2106 5.64269 17.0848 5.57599 16.9711L6.44199 16.4711C6.6698 16.3375 6.83556 16.1193 6.90305 15.864C6.97055 15.6087 6.93432 15.3371 6.80228 15.1084C6.67025 14.8797 6.45312 14.7125 6.19828 14.6433C5.94344 14.5741 5.67155 14.6085 5.44199 14.739ZM6.44199 7.66906L5.57599 7.16906C5.64269 7.05529 5.68624 6.92948 5.70411 6.79882C5.72197 6.66815 5.7138 6.5352 5.68009 6.4077C5.64638 6.2802 5.5878 6.16066 5.5077 6.0559C5.42759 5.95114 5.32753 5.86329 5.21332 5.79735C5.09911 5.73141 4.97301 5.68862 4.84223 5.67162C4.71145 5.65462 4.57857 5.66368 4.4513 5.69823C4.32403 5.73278 4.20485 5.79223 4.10062 5.87304C3.99639 5.95384 3.90918 6.05441 3.844 6.16906L2.844 7.90111C2.7773 8.01488 2.73378 8.14069 2.71592 8.27135C2.69805 8.40202 2.7062 8.53497 2.7399 8.66246C2.77361 8.78996 2.83222 8.90951 2.91233 9.01427C2.99244 9.11903 3.09246 9.20687 3.20667 9.27282C3.32088 9.33876 3.44702 9.38143 3.57779 9.39843C3.70857 9.41543 3.84142 9.40637 3.96869 9.37182C4.09597 9.33726 4.21514 9.27793 4.31937 9.19713C4.4236 9.11633 4.51081 9.01576 4.57599 8.90111L5.44199 9.40111C5.67155 9.53163 5.94344 9.566 6.19828 9.49682C6.45312 9.42763 6.67025 9.26041 6.80228 9.03173C6.93432 8.80304 6.97055 8.53141 6.90305 8.27611C6.83556 8.02082 6.6698 7.80261 6.44199 7.66906ZM13.065 20.14V19.14C13.065 18.8748 12.9596 18.6205 12.7721 18.433C12.5846 18.2454 12.3302 18.14 12.065 18.14C11.7998 18.14 11.5454 18.2454 11.3579 18.433C11.1703 18.6205 11.065 18.8748 11.065 19.14V20.14C10.7998 20.14 10.5454 20.2454 10.3579 20.433C10.1703 20.6205 10.065 20.8748 10.065 21.14C10.065 21.4052 10.1703 21.6596 10.3579 21.8472C10.5454 22.0347 10.7998 22.14 11.065 22.14H13.065C13.3302 22.14 13.5846 22.0347 13.7721 21.8472C13.9596 21.6596 14.065 21.4052 14.065 21.14C14.065 20.8748 13.9596 20.6205 13.7721 20.433C13.5846 20.2454 13.3302 20.14 13.065 20.14ZM11.065 3.98803V5.14C11.065 5.40522 11.1703 5.65962 11.3579 5.84716C11.5454 6.03469 11.7998 6.14 12.065 6.14C12.3302 6.14 12.5846 6.03469 12.7721 5.84716C12.9596 5.65962 13.065 5.40522 13.065 5.14V3.99608C13.3302 3.99343 13.5835 3.88545 13.7692 3.69603C13.9548 3.50662 14.0577 3.25129 14.055 2.98607C14.0523 2.72086 13.9445 2.46751 13.755 2.28185C13.5656 2.09619 13.3102 1.99343 13.045 1.99608H11.125C10.8668 1.99686 10.6191 2.09788 10.4341 2.27794C10.249 2.458 10.1412 2.70299 10.1334 2.96105C10.1256 3.21911 10.2185 3.47011 10.3923 3.661C10.5661 3.85189 10.8073 3.96765 11.065 3.984V3.98803Z" fill="currentColor" />
                        <path d="M15.105 17.3269C15.3054 17.213 15.5393 17.1731 15.7661 17.214C15.9929 17.255 16.1981 17.3742 16.346 17.5509C17.751 16.4375 18.6737 14.8262 18.923 13.0509C18.6729 13.035 18.4382 12.9244 18.2667 12.7416C18.0952 12.5588 17.9998 12.3176 17.9998 12.0669C17.9998 11.8163 18.0952 11.5751 18.2667 11.3924C18.4382 11.2096 18.6729 11.0989 18.923 11.0829C18.674 9.31931 17.7612 7.71738 16.371 6.60403C16.2313 6.81931 16.0138 6.97219 15.764 7.03091C15.5142 7.08964 15.2513 7.04959 15.0304 6.9191C14.8094 6.7886 14.6474 6.57784 14.5782 6.33072C14.509 6.0836 14.5379 5.8192 14.659 5.59293C12.9966 4.90633 11.1328 4.89062 9.45901 5.54898L9.46899 5.56497C9.6016 5.79478 9.63749 6.06786 9.56876 6.32413C9.50002 6.58039 9.33232 6.79882 9.10251 6.93143C8.8727 7.06403 8.59962 7.10001 8.34335 7.03128C8.08708 6.96255 7.8686 6.79478 7.73599 6.56497L7.71899 6.53494C6.27851 7.64848 5.32952 9.28023 5.07401 11.0829C5.32413 11.0989 5.55879 11.2096 5.73029 11.3924C5.90178 11.5751 5.99722 11.8163 5.99722 12.0669C5.99722 12.3176 5.90178 12.5588 5.73029 12.7416C5.55879 12.9244 5.32413 13.035 5.07401 13.0509C5.33028 14.8605 6.28557 16.4977 7.73499 17.611C7.87521 17.4108 8.0851 17.2701 8.32358 17.2163C8.56205 17.1626 8.81197 17.1997 9.02451 17.3205C9.23704 17.4412 9.3969 17.6369 9.47281 17.8693C9.54872 18.1017 9.53524 18.354 9.435 18.5769C11.1232 19.2459 13.0058 19.2295 14.682 18.531C14.5986 18.3128 14.5953 18.0719 14.6727 17.8515C14.7502 17.631 14.9034 17.4451 15.105 17.3269ZM7 12.07C7 11.0811 7.29324 10.1144 7.84265 9.29214C8.39206 8.4699 9.17295 7.82903 10.0866 7.45059C11.0002 7.07215 12.0056 6.97312 12.9755 7.16605C13.9454 7.35897 14.8363 7.83519 15.5355 8.53445C16.2348 9.23372 16.711 10.1246 16.9039 11.0945C17.0969 12.0644 16.9978 13.0698 16.6194 13.9834C16.2409 14.8971 15.6001 15.6779 14.7779 16.2273C13.9556 16.7767 12.9889 17.07 12 17.07C10.6739 17.07 9.40216 16.5432 8.46448 15.6055C7.5268 14.6678 7 13.3961 7 12.07Z" fill="currentColor" />
                        <path opacity="0.3" d="M18.337 18.924C18.4028 19.0378 18.4455 19.1635 18.4628 19.2938C18.48 19.4241 18.4714 19.5564 18.4374 19.6834C18.4034 19.8104 18.3447 19.9294 18.2647 20.0336C18.1847 20.1379 18.0849 20.2253 17.971 20.2909L17.106 20.7909L16.241 21.2909C16.1272 21.3566 16.0016 21.3991 15.8714 21.4162C15.7411 21.4333 15.6088 21.4245 15.482 21.3904C15.3551 21.3564 15.2362 21.2976 15.1321 21.2176C15.0279 21.1375 14.9406 21.0378 14.875 20.924C14.7424 20.6943 14.7065 20.4214 14.7751 20.1652C14.8438 19.909 15.0113 19.6906 15.241 19.558L14.741 18.693C14.6753 18.5793 14.6327 18.4536 14.6156 18.3233C14.5985 18.193 14.6072 18.0608 14.6412 17.9339C14.71 17.6776 14.8777 17.4591 15.1075 17.3265C15.3373 17.1939 15.6104 17.158 15.8667 17.2267C16.1229 17.2955 16.3414 17.4632 16.474 17.693L16.974 18.558C17.2034 18.4264 17.4756 18.3909 17.7311 18.4595C17.9865 18.5281 18.2044 18.6951 18.337 18.924ZM8.89999 4.57806C9.11219 4.43587 9.26194 4.21777 9.31851 3.96868C9.37508 3.71959 9.33419 3.45835 9.20422 3.23846C9.07426 3.01856 8.86506 2.85674 8.61957 2.78619C8.37408 2.71563 8.11089 2.74161 7.884 2.85894L6.22101 3.81902C6.01126 3.956 5.86054 4.16671 5.79871 4.40948C5.73687 4.65224 5.76841 4.90931 5.88708 5.12994C6.00576 5.35056 6.20293 5.51866 6.43958 5.60088C6.67622 5.68311 6.9351 5.67354 7.16501 5.57403L7.73901 6.56805C7.87162 6.79786 8.09008 6.9655 8.34634 7.03423C8.60261 7.10297 8.87569 7.06711 9.1055 6.9345C9.33531 6.80189 9.50301 6.58347 9.57175 6.3272C9.64048 6.07093 9.60459 5.79786 9.47198 5.56805L8.89999 4.57806ZM9.035 17.327C8.80533 17.1944 8.53239 17.1585 8.27621 17.2271C8.02004 17.2957 7.80162 17.4634 7.66901 17.693L7.16901 18.558C6.9392 18.4254 6.66612 18.3895 6.40985 18.4582C6.15358 18.5269 5.9351 18.6947 5.80249 18.9245C5.66988 19.1543 5.634 19.4274 5.70273 19.6836C5.77146 19.9399 5.9392 20.1583 6.16901 20.2909L7.901 21.2909C8.01479 21.3566 8.1404 21.3993 8.27066 21.4164C8.40092 21.4336 8.53327 21.4248 8.66016 21.3908C8.78705 21.3568 8.90598 21.2981 9.01019 21.2181C9.1144 21.1381 9.20183 21.0383 9.26749 20.9245C9.33315 20.8107 9.37577 20.6851 9.39288 20.5549C9.41 20.4246 9.40128 20.2922 9.36725 20.1653C9.33322 20.0384 9.27455 19.9194 9.19455 19.8152C9.11455 19.711 9.01479 19.6237 8.901 19.558L9.401 18.693C9.5336 18.4634 9.56952 18.1904 9.50089 17.9343C9.43225 17.6781 9.26468 17.4596 9.035 17.327ZM15.035 6.93401C15.2647 7.06662 15.5376 7.10251 15.7938 7.03387C16.05 6.96523 16.2684 6.79772 16.401 6.56805L16.973 5.57903C17.2025 5.69367 17.4673 5.71566 17.7126 5.64056C17.9579 5.56546 18.165 5.39894 18.291 5.17547C18.4169 4.952 18.4522 4.68863 18.3895 4.43987C18.3268 4.19111 18.1709 3.97607 17.954 3.83904L16.291 2.87896C16.0672 2.75278 15.8033 2.71805 15.5545 2.78204C15.3057 2.84602 15.0912 3.00373 14.9561 3.22222C14.8209 3.44071 14.7756 3.70307 14.8294 3.95428C14.8833 4.20548 15.0322 4.42611 15.245 4.57L14.669 5.57C14.537 5.7995 14.5015 6.072 14.5701 6.32769C14.6387 6.58338 14.8059 6.80141 15.035 6.93401ZM6 12.07C6 11.8048 5.89463 11.5504 5.70709 11.3628C5.51956 11.1753 5.26522 11.07 5 11.07H4C4 10.8048 3.89463 10.5504 3.70709 10.3628C3.51956 10.1753 3.26522 10.07 3 10.07C2.73478 10.07 2.48044 10.1753 2.29291 10.3628C2.10537 10.5504 2 10.8048 2 11.07V13.07C2 13.3352 2.10537 13.5896 2.29291 13.7772C2.48044 13.9647 2.73478 14.07 3 14.07C3.26522 14.07 3.51956 13.9647 3.70709 13.7772C3.89463 13.5896 4 13.3352 4 13.07H5C5.26522 13.07 5.51956 12.9647 5.70709 12.7772C5.89463 12.5896 6 12.3352 6 12.07ZM21.14 10.1301C20.8864 10.1307 20.6426 10.2284 20.4589 10.4033C20.2751 10.5781 20.1653 10.8167 20.152 11.07H19C18.7348 11.07 18.4804 11.1753 18.2929 11.3628C18.1054 11.5504 18 11.8048 18 12.07C18 12.3352 18.1054 12.5896 18.2929 12.7772C18.4804 12.9647 18.7348 13.07 19 13.07H20.144C20.1453 13.2013 20.1725 13.3311 20.2239 13.452C20.2754 13.5728 20.3502 13.6823 20.444 13.7742C20.5378 13.8662 20.6487 13.9387 20.7706 13.9877C20.8924 14.0368 21.0227 14.0613 21.154 14.06C21.2853 14.0587 21.4151 14.0315 21.5359 13.98C21.6567 13.9286 21.7663 13.8539 21.8582 13.7601C21.9501 13.6663 22.0227 13.5552 22.0717 13.4334C22.1208 13.3116 22.1453 13.1813 22.144 13.05V11.1301C22.144 10.9984 22.118 10.868 22.0675 10.7464C22.017 10.6248 21.943 10.5144 21.8497 10.4214C21.7564 10.3285 21.6457 10.255 21.5239 10.205C21.4021 10.155 21.2717 10.1295 21.14 10.1301ZM14.121 14.191C14.5407 13.7715 14.8265 13.2369 14.9423 12.655C15.0581 12.073 14.9988 11.4698 14.7717 10.9216C14.5447 10.3733 14.1602 9.90469 13.6668 9.57501C13.1734 9.24532 12.5934 9.06939 12 9.06939C11.4066 9.06939 10.8266 9.24532 10.3332 9.57501C9.83982 9.90469 9.45531 10.3733 9.22827 10.9216C9.00124 11.4698 8.94188 12.073 9.05771 12.655C9.17354 13.2369 9.45935 13.7715 9.879 14.191C10.0676 14.3731 10.3202 14.474 10.5824 14.4717C10.8446 14.4695 11.0954 14.3642 11.2808 14.1788C11.4662 13.9934 11.5714 13.7426 11.5737 13.4804C11.5759 13.2182 11.4752 12.9656 11.293 12.777C11.1531 12.6372 11.0578 12.4589 11.0192 12.2649C10.9806 12.071 11.0004 11.8699 11.0761 11.6872C11.1518 11.5044 11.2799 11.3482 11.4444 11.2383C11.6089 11.1284 11.8022 11.0698 12 11.0698C12.1978 11.0698 12.3911 11.1284 12.5556 11.2383C12.7201 11.3482 12.8482 11.5044 12.9239 11.6872C12.9996 11.8699 13.0194 12.071 12.9808 12.2649C12.9422 12.4589 12.8469 12.6372 12.707 12.777C12.6115 12.8693 12.5353 12.9796 12.4829 13.1016C12.4305 13.2236 12.4029 13.3548 12.4018 13.4876C12.4006 13.6204 12.4259 13.752 12.4762 13.8749C12.5264 13.9978 12.6007 14.1095 12.6946 14.2034C12.7885 14.2973 12.9001 14.3715 13.023 14.4218C13.1459 14.4721 13.2776 14.4974 13.4104 14.4963C13.5432 14.4951 13.6744 14.4675 13.7964 14.4151C13.9184 14.3627 14.0288 14.2865 14.121 14.191Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Penyakit</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'gejala' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('gejala'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M18.937 11.985L12.015 5.06303C11.9228 4.96752 11.8124 4.89131 11.6904 4.8389C11.5684 4.7865 11.4372 4.75888 11.3044 4.75773C11.1716 4.75657 11.04 4.78191 10.9171 4.83219C10.7942 4.88247 10.6825 4.9568 10.5886 5.0507C10.4947 5.14459 10.4205 5.25617 10.3702 5.37907C10.3199 5.50196 10.2946 5.63362 10.2958 5.7664C10.2969 5.89917 10.3245 6.03038 10.3769 6.15238C10.4293 6.27439 10.5055 6.38484 10.601 6.47709L11.293 7.16898L5.693 12.7691C5.50663 12.9552 5.37581 13.1894 5.31522 13.4457C5.25464 13.702 5.26669 13.9702 5.35001 14.22L6.10401 16.4821L2.28901 20.297C2.1935 20.3893 2.11733 20.4996 2.06492 20.6216C2.01251 20.7436 1.98493 20.8748 1.98377 21.0076C1.98262 21.1404 2.00789 21.272 2.05817 21.3949C2.10845 21.5178 2.18273 21.6295 2.27662 21.7234C2.37051 21.8173 2.48215 21.8915 2.60505 21.9418C2.72795 21.9921 2.85963 22.0174 2.99241 22.0163C3.12519 22.0151 3.25642 21.9875 3.37843 21.9351C3.50043 21.8827 3.61076 21.8066 3.70301 21.7111L7.51801 17.896L9.78001 18.6501C10.0298 18.7334 10.298 18.7454 10.5543 18.6849C10.8106 18.6243 11.0449 18.4934 11.231 18.307L16.831 12.7071L17.523 13.3991C17.6153 13.4946 17.7256 13.5707 17.8476 13.6231C17.9696 13.6755 18.1008 13.7031 18.2336 13.7043C18.3664 13.7054 18.4981 13.6801 18.6209 13.6298C18.7438 13.5795 18.8555 13.5053 18.9494 13.4114C19.0433 13.3175 19.1175 13.2059 19.1678 13.083C19.2181 12.9601 19.2434 12.8284 19.2423 12.6956C19.2411 12.5628 19.2135 12.4316 19.1611 12.3096C19.1087 12.1876 19.0325 12.0773 18.937 11.985Z" fill="currentColor" />
                        <path d="M21.707 7.861C21.5195 8.04847 21.2652 8.15385 21 8.15385C20.7348 8.15385 20.4805 8.04847 20.293 7.861L19.6 7.16898L16.861 9.9091L14.091 7.13908L16.831 4.40006L16.139 3.70707C15.9568 3.51847 15.8561 3.26577 15.8583 3.00358C15.8606 2.74138 15.9658 2.49062 16.1512 2.30521C16.3366 2.11981 16.5874 2.01465 16.8496 2.01237C17.1118 2.01009 17.3644 2.11085 17.553 2.29301L21.707 6.44706C21.8945 6.63459 21.9998 6.88893 21.9998 7.15409C21.9998 7.41925 21.8945 7.67347 21.707 7.861ZM8.00699 15.99L10.084 16.683L12.684 14.0771L9.91501 11.308L7.30899 13.908L8.00699 15.99Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Gejala</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'pengetahuan' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('pengetahuan'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="currentColor" />
                        <path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Pengetahuan</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'postketerangan' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('postketerangan'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
                        <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                        <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                        <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Post Keterangan</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'ubahpassword' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('ubahpassword'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                        <path d="M15.8054 11.639C15.6757 11.5093 15.5184 11.4445 15.3331 11.4445H15.111V10.1111C15.111 9.25927 14.8055 8.52784 14.1944 7.91672C13.5833 7.30557 12.8519 7 12 7C11.148 7 10.4165 7.30557 9.80547 7.9167C9.19432 8.52784 8.88885 9.25924 8.88885 10.1111V11.4445H8.66665C8.48153 11.4445 8.32408 11.5093 8.19444 11.639C8.0648 11.7685 8 11.926 8 12.1112V16.1113C8 16.2964 8.06482 16.4539 8.19444 16.5835C8.32408 16.7131 8.48153 16.7779 8.66665 16.7779H15.3333C15.5185 16.7779 15.6759 16.7131 15.8056 16.5835C15.9351 16.4539 16 16.2964 16 16.1113V12.1112C16.0001 11.926 15.9351 11.7686 15.8054 11.639ZM13.7777 11.4445H10.2222V10.1111C10.2222 9.6204 10.3958 9.20138 10.7431 8.85421C11.0903 8.507 11.5093 8.33343 12 8.33343C12.4909 8.33343 12.9097 8.50697 13.257 8.85421C13.6041 9.20135 13.7777 9.6204 13.7777 10.1111V11.4445Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Ubah Password</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'tentang' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('tentang'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Tentang</span>
        </a>
    </div>
</div>