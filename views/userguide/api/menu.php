<ol class="menu">
<?php foreach ($menu as $package => $categories): ksort($categories); ?>
<li><strong><?php echo $package ?></strong>
	<ol>
	<?php foreach ($categories as $category => $classes): sort($classes); ?>
		<li><?php if ($category !== 'Base'): ?><strong><?php echo $category ?></strong>
			<ol><?php endif ?>
			<?php foreach ($classes as $class): ?>
				<li><?php echo $class ?></li>
			<?php endforeach ?>
			<?php if ($category !== 'Base'): ?></ol><?php endif ?>
		</li>
	<?php endforeach ?>
	</ol>
<?php endforeach ?>
</ol>