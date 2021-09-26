 <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                    <li class="sidebar-item <?php echo $this->uri->segment(2) == 'beranda' ? 'selected': '' ?> <?php echo $this->uri->segment(2) == '' ? 'selected': '' ?>">
                    <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin/beranda') ?>"aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Beranda</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Menu</span></li>

                        <li class="sidebar-item <?php echo $this->uri->segment(2) == 'pembayaran' ? 'selected': '' ?>"> <a class="sidebar-link sidebar-link" href="<?php echo site_url('admin/pembayaran') ?>"
                                aria-expanded="false"><i class="icon-wallet"></i><span
                                    class="hide-menu">Pembayaran SPP</span></a>
                        </li>

                         <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i class="icon-list"></i><span
                                    class="hide-menu">Data Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">

                                <li class="sidebar-item <?php echo $this->uri->segment(2) == 'bulan' ? 'active': '' ?>"><a href="<?php echo site_url('admin/bulan') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Data Bulan
                                        </span></a>
                                </li>
                                <li class="sidebar-item  <?php echo $this->uri->segment(2) == 'thnmasuk' ? 'active': '' ?>"><a href="<?php echo site_url('admin/thnmasuk') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Data Tahun Masuk
                                        </span></a>
                                </li>
                                <li class="sidebar-item  <?php echo $this->uri->segment(2) == 'kelas' ? 'active': '' ?>"><a href="<?php echo site_url('admin/kelas') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Data Kelas
                                        </span></a>
                                </li>
                                <li class="sidebar-item  <?php echo $this->uri->segment(2) == 'siswa' ? 'active': '' ?>"><a href="<?php echo site_url('admin/siswa') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Data Siswa
                                        </span></a>
                                </li>
                                 <li class="sidebar-item  <?php echo $this->uri->segment(2) == 'spp' ? 'active': '' ?>"><a href="<?php echo site_url('admin/spp') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Data SPP
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i class="icon-user-follow"></i><span
                                    class="hide-menu">Registrasi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item <?php echo $this->uri->segment(3) == 'siswa' ? 'active': '' ?>"><a href="<?php echo site_url('admin/registrasi/siswa') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Siswa
                                        </span></a>
                                </li>
                                <li class="sidebar-item  <?php echo $this->uri->segment(3) == 'petugas' ? 'active': '' ?>"><a href="<?php echo site_url('admin/registrasi/petugas') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Petugas
                                        </span></a>
                                </li>
                                <li class="sidebar-item  <?php echo $this->uri->segment(3) == 'admin' ? 'active': '' ?>"><a href="<?php echo site_url('admin/registrasi/admin') ?>" class="sidebar-link"><span
                                            class="hide-menu"> Admin
                                        </span></a>
                                </li>
                            </ul>
                        </li>


                        <li class="list-divider"></li>
                      <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo site_url('auth/logout') ?>"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Keluar</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>