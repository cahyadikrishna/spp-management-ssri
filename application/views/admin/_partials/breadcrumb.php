
  <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Aplikasi Pembayaran SPP</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb m-0 p-0">
                                        <?php foreach ($this->uri->segments as $segment): ?>

                        <?php 
                        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                        $is_active =  $url == $this->uri->uri_string;
                        ?>              
                                    <li class="breadcrumb-item <?php echo $is_active ? 'selected': '' ?>">

                        <?php if($is_active): ?>
                            <?php echo ucfirst($segment) ?>
                        <?php else: ?>

                        <a href="<?php echo site_url($url) ?>" class="text-muted"><?php echo ucfirst($segment) ?></a>
                        <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                                </ol>


                            </nav>
                        </div>
                    </div>
