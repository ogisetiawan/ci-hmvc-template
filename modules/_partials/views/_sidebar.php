<nav class="side-menu">
<header class="side-menu-title">Rnd</header>
    <ul class="side-menu-list" id="url-menu-side">
        <li class="red">
            <a href="<?= site_url('dashboard') ?>">
                <i class="font-icon font-icon-widget"></i>
                <span class="lbl"><?= $this->lang->line('menu_1'); ?></span>
            </a>
            <ul>
                <li><a href=""><span class="lbl"><?= $this->lang->line('menu_5_a'); ?></span></a></li>
                <li><a href=""><span class="lbl"><?= $this->lang->line('menu_5_b'); ?></span></a></li>
            </ul>
        </li>
        <li class="blue-dirty with-sub">
            <span>
                <i class="font-icon font-icon-server"></i>
                <span class="lbl"><?= $this->lang->line('menu_2'); ?></span>
            </span>
            <ul>
                <li><a href="<?= site_url('document') ?>"><span class="lbl"><?= $this->lang->line('menu_2_a'); ?></span></a></li>
                <li><a href="<?= site_url('vendor') ?>"><span class="lbl"><?= $this->lang->line('menu_2_b'); ?></span></a></li>
                <li><a href="<?= site_url('reason') ?>"><span class="lbl"><?= $this->lang->line('menu_2_c'); ?></span></a></li>
            </ul>
        </li>
        <li class="gold with-sub">
            <span>
                <i class="font-icon font-icon-folder"></i>
                <span class="lbl"><?= $this->lang->line('menu_3'); ?></span>
            </span>
            <ul>
                <li><a href="<?= site_url('sample_evaluation') ?>"><span class="lbl"><?= $this->lang->line('menu_3_a'); ?></span></a></li>
                <li><a href="<?= site_url('pre_shipment') ?>"><span class="lbl"><?= $this->lang->line('menu_3_b'); ?></span></a></li>
            </ul>
        </li>
        <li class="green">
            <a href="<?= site_url('report') ?>">
                <i class="font-icon font-icon-doc"></i>
                <span class="lbl"><?= $this->lang->line('menu_4'); ?></span>
            </a>
        </li>
        <li class="orange-red with-sub">
            <span>
                <i class="font-icon font-icon-revers"></i>
                <span class="lbl"><?= $this->lang->line('menu_5'); ?></span>
            </span>
            <ul>
                <li><a href="<?= site_url('approve_sample_evaluation') ?>"><span class="lbl"><?= $this->lang->line('menu_5_a'); ?></span></a></li>
                <li><a href="<?= site_url('approve_pre_shipment') ?>"><span class="lbl"><?= $this->lang->line('menu_5_b'); ?></span></a></li>
            </ul>
        </li>
    </ul>

    <section>
        <header class="side-menu-title">Info</header>
        <ul class="side-menu-list">
            <li>
                <a href="#">
                    <i class="tag-color green"></i>
                    <span class="lbl">PT Kaldu Sari Nabati</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color grey-blue"></i>
                    <span class="lbl">Research & Development</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color red"></i>
                    <span class="lbl">nabatisnack.co.id</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="tag-color pink"></i>
                    <span class="lbl">info@nabatysnack.co.id</span>
                </a>
            </li> -->
            <li>
                <a href="#">
                    <i class="tag-color orange"></i>
                    <span class="lbl">021 - 9998881</span>
                </a>
            </li>
        </ul>
    </section>
</nav>