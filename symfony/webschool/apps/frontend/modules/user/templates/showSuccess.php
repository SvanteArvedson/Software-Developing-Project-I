<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $webschool_user->getId() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $webschool_user->getUsername() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $webschool_user->getPassword() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?id='.$webschool_user->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
