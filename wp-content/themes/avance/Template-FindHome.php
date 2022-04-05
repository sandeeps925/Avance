
<?php
/* Template Name: Find A Home */
get_header();
?>
<div>
    

<?php 
$rows = get_field('tabs');
if( $rows ):$i=0;
    ?>
<div id="find-your-home-banner">
    <div id="nbrheader" style="min-height: 466.797px;">

    <?php  foreach( $rows as $row ):$i++; ?>             
        <div id="<?php echo $i ;?>" class="maps" style="display: none;">

            <div tabindex="0" class="cycloneslider cycloneslider-template-standard cycloneslider-width-responsive"
                id="cycloneslider-avance-74-1" style="max-width:2000px">
                <div class="cycloneslider-slides cycle-slideshow" style="overflow: visible;">
                    <div class="cycloneslider-slide cycloneslider-slide-image cycle-slide cycle-slide-active"
                        style="position: absolute; top: 0px; left: 0px; z-index: 99; opacity: 1;"> <img
                            src="<?php echo $row['tab_image'] ;?>"
                            alt="Avance Home Collection 74" title=""> </div>
                </div> <a href="#" class="cycloneslider-prev"> <span class="arrow"></span> </a> <a href="#"
                    class="cycloneslider-next"> <span class="arrow"></span> </a>
            </div>
        </div>
        <?php endforeach; ?>


    </div>   
</div>
<?php endif; ?>

<main id="main" class="site-main" role="main">


    <div id="neighborhoodTab">
    <?php 
$rows = get_field('tabs');
if( $rows ):$i=0;
    ?>
        <div class="subCat">
            <div class="innerStr">
                <ul>
                <?php  foreach( $rows as $row ):$i++; ?>
                    <li id="s<?php echo $i ?>" class="ALTA Home Collection "><a class="avance" href="#avance-74">
                            <p><?php echo $row['tab_heading'] ?><br>Home Collection</p>
                        </a></li>
                   
                        <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>

        <div class="block">
            <div class="innerStr">
                <h2>Find Your New Home<span></span></h2>
                <article>
                    <p>Avance homes communicate a vibe that’s distinctly different from the norm. They captivate, with
                        fresh designs deeply influenced by the colors, forms and materials of their iconic, South
                        Mountain setting. Bold roof lines, geometric massing and a harmonious mix of earthy elements
                        define four distinct, new architectural styles: Desert Modern, Arizona Modern, New Century
                        Modern and Farmhouse Modern. Each harnesses highlights from the world’s best architectural
                        traditions – and updates them to elevate new-home design in Phoenix.</p>
                    <p>&nbsp;</p>
                </article>
                <?php 
$rows = get_field('hometab');
if( $rows ){
    ?>
    
                <div class="row">
                <?php  foreach( $rows as $row ){ ?>
                    <div class="colu col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <figure class="figure">
                            <img src="<?php echo $row["h_image"] ?>"
                                alt="">
                        </figure>
                        <div class="contentBlock row">
                            <div class=" col-8 rowss text-left heading">
                                <h3><?php echo $row["h_title"] ?> </h3>
<?php if( $row["h_link"] ){ ?>
                                <div class="rowss">
                                    <a href="<?php echo $row["h_link"] ?> "
                                        class="learnMore mkto_addcookie" style="border: 1px solid white;padding: 4px;color: white;">Learn More</a>
                                </div>
                                <?php } ?>
                                <div class="clear"></div>
                            </div>
                            <div class=" col-4 rowss text-left content-text">

                                ● <?php echo $row["h_desc"] ?><br>


                            </div>

                            <div class="clear"></div>
                        </div>
                    </div>
                
                    <?php } ?>
                </div>
</div>
                <?php }?>
            </div>
        
        <!-- Commitment section -->

        </div>

    </div>

</main>

</div>
<?php get_footer() ;?>