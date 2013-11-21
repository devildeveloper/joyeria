<div id="fb-root"></div>
<header>
    <h1>Logo</h1>
    <?php print render($page['header']); ?>
</header>
<a id="main-content"></a>
<?php print $messages; ?>
<?php print render($tabs); ?>
<?php print render($page['help']); ?>
<?php if ($action_links): ?>                
    <ul class="action-links"><?php print render($action_links); ?></ul>
<?php endif; ?>
<section>
    <?php echo(render($page['content']));?>  
</section>


<!-- F O O T E R -->
<footer> 
    <?php print render($page['footer']); ?>
</footer>