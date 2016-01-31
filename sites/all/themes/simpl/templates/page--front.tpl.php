
<?php foreach ($nq['hero'] as $n): ?>
    <div class="w-hero">
        <div class="hero">
            <article class="post-<?php echo $n->id ?>">
                <?php if ($n->labels): ?>
                    <span class="label" href="javascript:void(0)"><?php echo current($n->labels)['name'] ?></span>
                <?php endif ?>
                <a href="<?php echo $n->href ?>"><img src="<?php echo $n->image['x960'] ?>" alt=""></a>

                <div class="headline-overlay">
                    <h2><a href="<?php echo $n->href ?>"><?php echo $n->subtitle ?></a></h2>
                    <h3><a href="<?php echo $n->href ?>"><?php echo $n->title ?></a></h3>
                </div>
            </article>
        </div>
    </div>
<?php endforeach ?>

<div class="w-featured">
    <div class="featured">

        <?php for ($i = count($menus['promoted']) - 1; $i >= 0; $i--): ?>
            <div>
                <span class="label">
                    <a href="<?php echo $menus['promoted'][$i]['href'] ?>">
                        <?php echo $menus['promoted'][$i]['title'] ?></span>
                    </a>
                <a href="<?php echo $menus['promoted'][$i]['href'] ?>">
                    <img src="<?php echo render_image('x307', $menus['promoted'][$i]['image']->uri) ?>" alt="">
                </a>
            </div>
        <?php endfor; ?>

    </div>
</div>


<div class="w-main">
    <div class="main">
        <div class="first">
            <div class="strike-through-header">
                <h3 class="bold">الأكثر قراءة</h3>
            </div>
            <ol class="topfive">
                <?php foreach ($popular as $k => $p): ?>
                    <li>
                        <span><?php echo $k + 1 ?></span>
                        <a href="<?php echo render_href($p->nid) ?>"><?php echo $p->node_title ?></a>
                    </li>
                <?php endforeach ?>
            </ol>

            <?php include_once 'partials/_opinions.php' ?>

            <div class="side-ad">
                <img src="<?php echo base_path() . path_to_theme() ?>/temp/side-ad.jpg" alt="">
            </div>

        </div>
        <div class="second">

            <div class="w-cnt two-cells">
                <article class="left">
                    <a href="<?php echo $nq['featured'][1]->href ?>">
                        <img src="<?php echo $nq['featured'][1]->image['x307'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['featured'][1]->href ?>">
                            <?php echo $nq['featured'][1]->title ?>
                        </a>
                    </h3>
                    <ul class="tags">
                        <?php echo $nq['featured'][1]->tags['html'] ?>
                    </ul>
                    <hr class="line" />
                </article>
                <article class="right">
                    <a href="<?php echo $nq['featured'][0]->href ?>">
                        <img src="<?php echo $nq['featured'][0]->image['x307'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['featured'][0]->href ?>">
                            <?php echo $nq['featured'][0]->title ?>
                        </a>
                    </h3>
                    <ul class="tags">
                        <?php echo $nq['featured'][0]->tags['html'] ?>
                    </ul>
                    <hr class="line" />
                </article>
            </div>


            <div class="w-full one-cell">
                <article>
                    <a href="<?php echo $nq['featured'][2]->href ?>">
                        <img src="<?php echo $nq['featured'][2]->image['x633'] ?>" alt="">
                        <?php if ($nq['featured'][2]->labels): ?>
                            <span class="label"
                                  href="javascript:void(0)"><?php echo current($nq['featured'][2]->labels)['name'] ?></span>
                        <?php endif ?>
                    </a>

                    <h3>
                        <a href="<?php echo $nq['featured'][2]->href ?>">
                            <?php echo $nq['featured'][2]->title ?>
                        </a>
                    </h3>

                    <p><?php echo $nq['featured'][2]->teaser ?></p>

                    <ul class="tags">
                        <?php echo $nq['featured'][2]->tags['html'] ?>
                    </ul>


                </article>
            </div>

            <div class="w-cnt three-cells">
                <div class="left two-items">

                    <?php for ($i = 1;
                    $i<=1;
                    $i++): ?>
                    <article
                        class="<?php echo $nq['latest'][$i]->image != '' ? '' : 'no-img ' ?><?php echo $nq['latest'][$i]->type ?> <?php echo $nq['latest'][$i]->type == 'social' ? $nq['latest'][$i]->social_channel : '' ?>">
                        
                        <?php if($nq['latest'][$i]->image): ?>
                            <img src="<?php echo $nq['latest'][$i]->image['x307'] ?>" alt="" />
                        <?php endif ?>
                        <h3 class='customfont'>
                        <a href="<?php echo $nq['latest'][$i]->href ?>">
                            <?php echo $nq['latest'][$i]->title ?>
                        </a>
                        </h3>
                        <?php if ($nq['latest'][$i]->type == 'social'): ?>
                            <div class="author">
                                <?php if ($nq['latest'][$i]->author->title != ''): ?>
                                <div><img src="<?php echo $nq['latest'][$i]->author->image ?>" /></div>
                                <?php endif ?>
                                <div><?php echo $nq['latest'][$i]->author->title ?></div>
                            </div>
                            <?php else: ?>
                                <ul class="tags customtag">
                                    <?php echo $nq['latest'][$i]->tags['html'] ?>
                                </ul>
                                <hr class="line" />
                            <?php endif ?>
                        

                    </article>
                    <?php endfor; ?>

                </div>
                <article class="right <?php echo $nq['latest'][0]->type ?> <?php echo $nq['latest'][0]->type == 'social' ? $nq['latest'][0]->social_channel : '' ?>">
                    <a href="<?php echo $nq['latest'][0]->href ?>">
                        <img src="<?php echo $nq['latest'][0]->image['x307'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['latest'][0]->href ?>">
                            <?php echo $nq['latest'][0]->title ?>
                        </a>
                    </h3>
                    <?php if ($nq['latest'][0]->type == 'social'): ?>
                        <div class="author">
                        <?php if ($nq['latest'][0]->author->title != ''): ?>
                            <div><img src="<?php echo $nq['latest'][0]->author->image ?>" /></div>
                            <div><?php echo $nq['latest'][0]->author->title ?></div>
                            <?php endif ?>
                        </div>
                    <?php else: ?>
                        <ul class="tags">
                            <?php echo $nq['latest'][0]->tags['html'] ?>
                        </ul>
                    <hr class="line" />
                    <?php endif ?>

                </article>
            </div>

            <div class="w-grid one-cell">
                <section>
                    <div class="grid-header">
                        <div class="hide"><a href=""><i class="fa fa-play"></i> البث المباشر</a></div>
                        <div>فيديوهات مختارة</div>
                    </div>
                    <div id="vod-today" class="grid-content">
                        <ul>
                            <li>
                                <a href=""><img src="<?php echo base_path().path_to_theme().'/assets/sample.jpg' ?>" /></a>
                                <h4>ساعة تيكنو</h4>
                                <p>هل هناك ضرورة ملحة لتجديد ما يُعرف بالخطاب الديني، وكيف؟ ثم كيف تُسكّن </p>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="w-cnt two-cells two-cells-second">

                <article class="left <?php echo $nq['latest'][3]->type ?> <?php echo $nq['latest'][3]->type == 'social' ? $nq['latest'][3]->social_channel : '' ?>">
                    <a href="<?php echo $nq['latest'][3]->href ?>">
                        <img src="<?php echo $nq['latest'][3]->image['x307'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['latest'][3]->href ?>">
                            <?php echo $nq['latest'][3]->title ?>
                        </a>
                    </h3>
                    <?php if($nq['latest'][3]->type == 'social'): ?>
                        <div class="author">
                        <?php if ($nq['latest'][3]->author->title != ''): ?>
                            <div><img src="<?php echo $nq['latest'][3]->author->image ?>" /></div>
                            <div><?php echo $nq['latest'][3]->author->title ?></div>
                            <?php endif ?>
                        </div>
                    <?php else: ?>
                        <ul class="tags">
                            <?php echo $nq['latest'][3]->tags['html'] ?>
                        </ul>
                        <hr class="line" />
                    <?php endif ?>


                </article>
                <article class="right <?php echo $nq['latest'][2]->type ?> <?php echo $nq['latest'][2]->type == 'social' ? $nq['latest'][2]->social_channel : '' ?>">
                    <a href="<?php echo $nq['latest'][2]->href ?>">
                        <img src="<?php echo $nq['latest'][2]->image['x307'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['latest'][2]->href ?>">
                            <?php echo $nq['latest'][2]->title ?>
                        </a>
                    </h3>
                    <?php if($nq['latest'][2]->type == 'social'): ?>
                        <div class="author">
                        <?php if ($nq['latest'][2]->author->title != ''): ?>
                            <div><img src="<?php echo $nq['latest'][2]->author->image ?>" /></div>
                            <div><?php echo $nq['latest'][2]->author->title ?></div>
                            <?php endif ?>
                        </div>
                    <?php else: ?>
                        <ul class="tags">
                            <?php echo $nq['latest'][2]->tags['html'] ?>
                        </ul>
                        <hr class="line" />
                    <?php endif ?>
                </article>
            </div>

            <div class="w-cnt three-cells three-cells-second">

                <article class="left <?php echo $nq['latest'][4]->type ?> <?php echo $nq['latest'][4]->type == 'social' ? $nq['latest'][4]->social_channel : '' ?>">
                    <a href="<?php echo $nq['latest'][4]->href ?>">
                        <img src="<?php echo $nq['latest'][4]->image['x307'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['latest'][4]->href ?>">
                            <?php echo $nq['latest'][4]->title ?>
                        </a>
                    </h3>
                    <?php if ($nq['latest'][4]->type == 'social'): ?>
                        <div class="author">
                        <?php if ($nq['latest'][4]->author->title != ''): ?>
                            <div><img src="<?php echo $nq['latest'][4]->author->image ?>" /></div>
                            <div><?php echo $nq['latest'][4]->author->title ?></div>
                            <?php endif ?>
                        </div>
                    <?php else: ?>
                        <ul class="tags">
                            <?php echo $nq['latest'][4]->tags['html'] ?>
                        </ul>
                        <hr class="line" />
                    <?php endif ?>
                </article>

                <div class="right two-items">
                    <?php for ($i = 5;
                               $i<=5;
                               $i++): ?>
                        <article class="<?php echo $nq['latest'][$i]->image != '' ? '' : 'no-img ' ?><?php echo $nq['latest'][$i]->type ?> <?php echo $nq['latest'][$i]->type == 'social' ? $nq['latest'][$i]->social_channel : '' ?>">
                            
                            <?php if($nq['latest'][$i]->image): ?>
                                <img src="<?php echo $nq['latest'][$i]->image['x307'] ?>" alt="">
                            <?php endif; ?>
                            <h3 class='customfont'>
                            <a href="<?php echo $nq['latest'][$i]->href ?>">
                                <?php echo $nq['latest'][$i]->title ?>
                            </a>
                            </h3>    
                            <?php if ($nq['latest'][$i]->type == 'social'): ?>
                                <div class="author">
                                <?php if ($nq['latest'][$i]->author->title != ''): ?>
                                    <div><img src="<?php echo $nq['latest'][$i]->author->image ?>" /></div>
                                    <div><?php echo $nq['latest'][$i]->author->title ?></div>
                                    <?php endif ?>
                                </div>
                            <?php else: ?>
                                <ul class="tags customtag">
                                    <?php echo $nq['latest'][$i]->tags['html'] ?>
                                </ul>
                                <hr class="line" />
                            
                            <?php endif ?>
                          
                        </article>
                    <?php endfor; ?>
                </div>


            </div>

            <div class="w-full one-cell">
                <article>
                    <a href="<?php echo $nq['latest'][6]->href ?>">
                        <img src="<?php echo $nq['latest'][6]->image['x633'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['latest'][6]->href ?>">
                            <?php echo $nq['latest'][6]->title ?>
                        </a>
                    </h3>

                    <p><?php echo $nq['latest'][6]->teaser ?></p>

                    <ul class="tags">
                        <?php echo $nq['latest'][6]->tags['html'] ?>
                    </ul>

                    <?php if ($nq['latest'][6]->labels): ?>
                        <span class="label"
                              href="javascript:void(0)"><?php echo current($nq['latest'][6]->labels)['name'] ?></span>
                    <?php endif ?>
                </article>
            </div>

            <div class="w-cnt three-cells three-cells-second">

                <article class="left <?php echo $nq['latest'][7]->type ?> <?php echo $nq['latest'][7]->type == 'social' ? $nq['latest'][7]->social_channel : '' ?>">
                    <a href="<?php echo $nq['latest'][7]->href ?>">
                        <img src="<?php echo $nq['latest'][7]->image['x307'] ?>" alt="">
                    </a>

                    <h3>
                        <a href="<?php echo $nq['latest'][7]->href ?>">
                            <?php echo $nq['latest'][7]->title ?>
                        </a>
                    </h3>
                    <?php if ($nq['latest'][7]->type == 'social'): ?>
                        <div class="author">
                        <?php if ($nq['latest'][7]->author->title != ''): ?>
                            <div><img src="<?php echo $nq['latest'][7]->author->image ?>" /></div>
                            <div><?php echo $nq['latest'][7]->author->title ?></div>
                            <?php endif ?>
                        </div>
                    <?php else: ?>
                        <ul class="tags">
                            <?php echo $nq['latest'][7]->tags['html'] ?>
                        </ul>
                        <!--<hr class="line" />-->
                    <?php endif ?>
                </article>

                <div class="right two-items">
                    <?php for ($i = 8;
                               $i<=8;
                               $i++): ?>
                        <article class="<?php echo $nq['latest'][$i]->image != '' ? '' : 'no-img ' ?><?php echo $nq['latest'][$i]->type ?> <?php echo $nq['latest'][$i]->type == 'social' ? $nq['latest'][$i]->social_channel : '' ?>">
                           
                            <?php if($nq['latest'][$i]->image): ?>
                                <img src="<?php echo $nq['latest'][$i]->image['x307'] ?>" alt="">
                            <?php endif; ?>
                            <h3 class='customfont'>    
                              <a href="<?php echo $nq['latest'][$i]->href ?>">
                                <?php echo $nq['latest'][$i]->title ?>
                              </a>  
                            </h3>    
                            <?php if ($nq['latest'][$i]->type == 'social'): ?>
                                <div class="author">
                                    <?php if ($nq['latest'][$i]->author->title != ''): ?>
                                    <div><img src="<?php echo $nq['latest'][$i]->author->image ?>" /></div>
                                    <div><?php echo $nq['latest'][$i]->author->title ?></div>
                                    <?php endif ?>
                                </div>
                            <?php else: ?>
                            <ul class="tags customtag">
                                <?php echo $nq['latest'][$i]->tags['html'] ?>
                            </ul>
                            <!--<hr class="line" />-->
                            <?php endif ?>

                        </article>
                    <?php endfor; ?>
                </div>


            </div>

        </div>

    </div>
</div>

