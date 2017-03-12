<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="container">
	<h1>Blog posts</h1>
	<table class="table table-hover">
	    <tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	    </tr>

	    <!-- Here is where we loop through our $posts array, printing out post info -->

	    <?php foreach ($posts as $post): ?>
	    <tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
		    <?php echo $this->Html->link($post['Post']['title'],
	array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	    </tr>
	    <?php endforeach; ?>
	    <?php unset($post); ?>
	</table>
</div>
</div>
</div>
