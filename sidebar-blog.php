	<button class="btn btn-warning visible-xs center-block" data-toggle="collapse" data-target="#sidebar">サイドメニューを開く・閉じる</button>
	<div class="col-xs-12 col-sm-4 col-md-3 hidden-xs" id="sidebar">

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog_menu') ) : ?>
			<p>ウィジェットが設定されていません。</p>
		<?php endif; ?>

	</div>
