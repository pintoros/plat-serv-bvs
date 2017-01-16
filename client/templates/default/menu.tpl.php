        <?require_once(dirname(__FILE__)."/header.tpl.php");?>
        <?require_once(dirname(__FILE__)."/sidebar.tpl.php");?>

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count">
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-file-o"></i> <?=$trans->getTrans('menu','MY_SHELF')?></span>
                <div class="count"><?php echo $totalCollections; ?></div>
                <span class="count_bottom"><a href="<?=RELATIVE_PATH?>/controller/mydocuments/control/business"><?=$trans->getTrans('menu','SEE_ALL_DOCS')?></a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-external-link"></i> <?=$trans->getTrans('menu','MY_LINKS')?></span>
                <div class="count green"><?php echo $totalLinks; ?></div>
                <span class="count_bottom"><a href="<?=RELATIVE_PATH?>/controller/mylinks/control/business"><?=$trans->getTrans('menu','SEE_ALL_LINKS')?></a></span>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-folder-open-o"></i> <?=$trans->getTrans('menu','MY_PROFILE_DOCUMENTS')?></span>
                <div class="count"><?php echo $totalProfiles; ?></div>
                <span class="count_bottom"><a href="<?=RELATIVE_PATH?>/controller/myprofiledocuments/control/business"><?=$trans->getTrans('menu','SEE_ALL_PROFILES')?></a></span>
              </div>
            </div>
            <!-- /top tiles -->

            <!-- Services Platform Dashboard -->
            <div class="row">
              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Suggested Documents<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <article class="media event">
                      <div class="media-body">
                        <a class="title" href="#"><i class="fa fa-file-o" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      </div>
                    </article>
                    <article class="media event">
                      <div class="media-body">
                        <a class="title" href="#"><i class="fa fa-file-o" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      </div>
                    </article>
                    <article class="media event">
                      <div class="media-body">
                        <a class="title" href="#"><i class="fa fa-file-o" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      </div>
                    </article>
                    <article class="media event">
                      <div class="media-body">
                        <a class="title" href="#"><i class="fa fa-file-o" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      </div>
                    </article>
                    <article class="media event">
                      <div class="media-body">
                        <a class="title" href="#"><i class="fa fa-file-o" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$trans->getTrans('menu','MY_SHELF')?><small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if ( $collections ) : ?>
                      <?php foreach ( $collections as $col ) : ?>
                        <article class="media event">
                          <div class="media-body">
                            <a class="title" href="<?php echo $col['docURL'] ?>" target="_blank"><i class="fa fa-file-o" aria-hidden="true"></i><?php echo $col['title'] ?></a>
                          </div>
                        </article>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$trans->getTrans('menu','MY_PROFILE_DOCUMENTS')?><small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if ( $profiles ) : ?>
                      <?php foreach ( $profiles as $profile ) : ?>
                        <article class="media event">
                          <div class="media-body">
                            <a class="title" href="<?php echo RELATIVE_PATH."/controller/myprofiledocuments/control/business/profile/".$profile["profileID"]."/mode/".DEFAULT_TRIGRAMAS_MODE; ?>"><i class="fa fa-folder-open-o" aria-hidden="true"></i><?php echo $profile['profileName']; ?></a>
                            <p><span><?=$trans->getTrans('menu','KEYWORDS')?>: </span><?php echo $profile['profileText']; ?></p>
                          </div>
                        </article>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Recent Activities <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="dashboard-widget-content">

                      <ul class="list-unstyled timeline widget">
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>13 hours ago</span>
                              </div>
                              <p class="excerpt">Add collection: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>1 week ago</span>
                              </div>
                              <p class="excerpt">Remove collection: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>06/10/2016 - 10:00 AM</span>
                              </div>
                              <p class="excerpt">Add link: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>01/10/2016 - 11:30 AM</span>
                              </div>
                              <p class="excerpt">Update link: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>20/09/2016 - 11:00 AM</span>
                              </div>
                              <p class="excerpt">Remove link: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>15/09/2016 - 12:00 PM</span>
                              </div>
                              <p class="excerpt">Add profile: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>05/10/2016 - 15:30 AM</span>
                              </div>
                              <p class="excerpt">Update profile: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block">
                            <div class="block_content">
                              <h2 class="title"></h2>
                              <div class="byline">
                                <span>1 month ago</span>
                              </div>
                              <p class="excerpt">Remove profile: <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Searches</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Query</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td id="s1">1</td>
                          <td class="query">malaria</td>
                          <td>
                            <button id="v1" class="btn btn-primary btn-xs search" value="portal" data-original-title="" title=""><i class="fa fa-search search"></i> View</button>
                          </td>
                        </tr>
                        <tr>
                          <td id="s2">2</td>
                          <td class="query">covarde</td>
                          <td>
                            <button id="v2" class="btn btn-primary btn-xs search" value="portal" data-original-title="" title=""><i class="fa fa-search search"></i> View</button>
                          </td>
                        </tr>
                        <tr>
                          <td id="s3">3</td>
                          <td class="query">dengue tw:malaria</td>
                          <td>
                            <button id="v3" class="btn btn-primary btn-xs search" value="portal" data-original-title="" title=""><i class="fa fa-search search"></i> View</button>
                          </td>
                        </tr>
                        <tr>
                          <td id="s4">4</td>
                          <td class="query">dengue malaria</td>
                          <td>
                            <button id="v4" class="btn btn-primary btn-xs search" value="portal" data-original-title="" title=""><i class="fa fa-search search"></i> View</button>
                          </td>
                        </tr>
                        <tr>
                          <td id="s5">5</td>
                          <td class="query">dengue</td>
                          <td>
                            <button id="v5" class="btn btn-primary btn-xs search" value="portal" data-original-title="" title=""><i class="fa fa-search search"></i> View</button>
                          </td>
                        </tr>
                        <tr>
                          <td id="s6">6</td>
                          <td class="query">zika</td>
                          <td>
                            <button id="v6" class="btn btn-primary btn-xs search" value="portal" data-original-title="" title=""><i class="fa fa-search search"></i> View</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!--div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Suggested Events<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Event One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Event Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Event Three Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Event Four Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Event Five Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div-->

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$trans->getTrans('menu','MY_LINKS')?><small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if ( $links ) : ?>
                      <?php foreach ( $links as $link ) : ?>
                        <article class="media event">
                          <div class="media-body">
                            <a class="title" href="<?php echo $link['url']; ?>" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i><?php echo $link['name']; ?></a>
                            <p><?php echo $link['description']; ?></p>
                          </div>
                        </article>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

        <?require_once(dirname(__FILE__)."/footer.tpl.php");?>