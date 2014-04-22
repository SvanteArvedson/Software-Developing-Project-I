<h1>User List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($webschool_user_list as $webschool_user): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id='.$webschool_user->getId()) ?>"><?php echo $webschool_user->getId() ?></a></td>
      <td><?php echo $webschool_user->getUsername() ?></td>
      <td><?php echo $webschool_user->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
