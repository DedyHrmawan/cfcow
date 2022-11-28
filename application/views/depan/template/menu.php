<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('beranda'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
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
        <a <?= $this->uri->segment(1) == 'diagnosa' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('diagnosa'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor" />
                    <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor" />
                </svg>
            </span>
            <span class="menu-title">Diagnosa</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'riwayat' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('riwayat'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
                    <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
                </svg>
            </span>
            <span class="menu-title">Riwayat</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == 'keterangan' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('keterangan'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="currentColor" />
                        <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="currentColor" />
                    </svg>
                </span>
            </span>
            <span class="menu-title">Keterangan</span>
        </a>
    </div>
</div>
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500">
    <div class="menu-item">
        <a <?= $this->uri->segment(1) == '#' || $this->uri->segment(1) == '' ? 'class="menu-link active"' : 'class="menu-link"' ?> href="<?php echo site_url('#'); ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
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