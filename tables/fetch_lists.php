<?php
class fetch_lists{

    public function fetch_users_thead(){
        ?>
            <thead>
                <tr>
                <th>#</th>
                <th>Admission</th>
                <th>Fullname</th>
                <th>Email address</th>
                <th>Actions</th>
                </tr>
            </thead>
        <?php
    }

    public function fetch_users($conn, $conf){

if(isset($_POST['query']))
{
    $search_term = $_POST['query'];
    $sql = (sprintf("select * from users WHERE fullname LIKE '%s%' OR admission LIKE '%s%' ", $search_term, $search_term));
}else{
    $sql = "select * from users";
}

$students = $conn->select_while($sql);
?>
<table class="table table-striped table-hover">
<?php $this->fetch_users_thead(); ?>
    <tbody>
<?php
if($students){
    $sn=0;
foreach($students AS $student){
    $sn++;
    ?>
    <tr>
        <td><?php print $sn; ?></td>
        <td><?php print $student['admission']; ?></td>
        <td><?php print $student['fullname']; ?></td>
        <td><?php print $student['email']; ?></td>
        <td> [ <a href = ""> Edit </a> ] | [  <a href = ""> Del </a> ] </td>
    </tr>
<?php
}}
else{
    ?>
    <tr><td colspan="3">No student matching <strong><?php print $search_term;?></strong></td></tr>
<?php }
?>
</tbody>
<?php $this->fetch_users_thead(); ?>
</table>
<?php
    }
}