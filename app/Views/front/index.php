<?php
use MattMVC\Models\User;

use MattMVC\Helpers\DateTime;
use MattMVC\Helpers\Image;
?>
<!--/stories-->
<?php foreach($data["articles"] as $article):
  $author = User::getObjById($article->getAuthor());
  ?>
  <div class="row">
    <br>
    <div class="col-md-2 col-sm-3 text-center">
      <a class="story-title" href="/author/<?php echo $article->getAuthor();?>">
        <img alt="" src="<?php echo Image::viewSqlBlobAsImg($author->getPhoto());?>" style="width:100px;height:100px" class="img-circle">
      </a>
    </div>
    <div class="col-md-10 col-sm-9">
      <h3>
        <a href="/article/<?php echo $article->getId();?>">
          <?php echo $article->getTitle();?>
        </a>
      </h3>
      <div class="row">
        <div class="col-xs-9">
          <h4>
            <a href="http://<?php echo $author->getWebsite();?>">
              <span class="label label-default">
                <?php echo $author->getWebsite();?>
              </span>
            </a>
          </h4>
          <h4>
            <small style="font-family:courier,'new courier';" class="text-muted">
              <?php echo DateTime::formatForSite($article->getTimestamp());?>
              &middot;
              <a href="/article/<?php echo $article->getId();?>" class="text-muted">Read More</a>
            </small>
          </h4>
        </div>
        <div class="col-xs-3"></div>
      </div>
      <br><br>
    </div>
  </div>
  <hr>
<?php endforeach;?>
<div class="row">
  <br>
  <div class="col-md-2 col-sm-3 text-center">
    <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/women/56.jpg" style="width:100px;height:100px" class="img-circle"></a>
  </div>
  <div class="col-md-10 col-sm-9">
    <h3>14 Useful Sites for Designers</h3>
    <div class="row">
      <div class="col-xs-9">
        <h4><span class="label label-default">devgarage.com</span></h4><h4>
        <small style="font-family:courier,'new courier';" class="text-muted">Yesterday • <a href="#" class="text-muted">Read More</a></small>
        </h4></div>
      <div class="col-xs-3"></div>
    </div>
    <br><br>
  </div>
</div>
<hr>

<div class="row">
  <br>
  <div class="col-md-2 col-sm-3 text-center">
    <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/men/29.jpg" style="width:100px;height:100px" class="img-circle"></a>
  </div>
  <div class="col-md-10 col-sm-9">
    <h3>Measuring Your Link Building with Google Analytics</h3>
    <div class="row">
      <div class="col-xs-9">
        <h4><span class="label label-default">searchenginewatch.com</span></h4><h4>
        <small style="font-family:courier,'new courier';" class="text-muted">Yesterday • <a href="#" class="text-muted">Read More</a></small>
        </h4></div>
      <div class="col-xs-3"></div>
    </div>
    <br><br>
  </div>
</div>
<hr>

<div class="row">
  <br>
  <div class="col-md-2 col-sm-3 text-center">
    <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/women/56.jpg" style="width:100px;height:100px" class="img-circle"></a>
  </div>
  <div class="col-md-10 col-sm-9">
    <h3>Dramatically Raise the Value of Any Piece of Content with These 27 Tactics</h3>
    <div class="row">
      <div class="col-xs-9">
        <h4><span class="label label-default">searchenginewatch.com</span></h4><h4>
        <small style="font-family:courier,'new courier';" class="text-muted">2 days ago • <a href="#" class="text-muted">Read More</a></small>
        </h4></div>
      <div class="col-xs-3"></div>
    </div>
    <br><br>
  </div>
</div>
<hr>

<div class="row">
  <br>
  <div class="col-md-2 col-sm-3 text-center">
    <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/men/29.jpg" style="width:100px;height:100px" class="img-circle"></a>
  </div>
  <div class="col-md-10 col-sm-9">
    <h3>TrendPaper - What's Trending in the World</h3>
    <div class="row">
      <div class="col-xs-9">
        <h4><span class="label label-default">betali.st</span></h4><h4>
        <small style="font-family:courier,'new courier';" class="text-muted">Last week • <a href="#" class="text-muted">Read More</a></small>
        </h4></div>
      <div class="col-xs-3"></div>
    </div>
    <br><br>
  </div>
</div>
<hr>
<!--/stories-->


<a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a>
