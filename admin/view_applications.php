<?php
require('top.inc.php');
isAdmin();

if(isset($_GET['type']) && $_GET['type']!=''){
    $type=get_safe_value($con,$_GET['type']);
    if($type=='delete'){
        $id=get_safe_value($con,$_GET['id']);
        $delete_sql="delete from applications where id='$id'";
        mysqli_query($con,$delete_sql);
    }
}

$sql="select * from applications order by id DESC";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Job Applications Received from Career page. </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Position Applied For</th>
                                        <th>Preferred Location</th>
                                        <th>LinkedIn Profile</th>
                                        <th>Cover Letter</th>
                                        <th>Highest Level of Education</th>
                                        <th>Years of Relevant Experience</th>
                                        <th>Previous Employers</th>
                                        <th>Key Skills</th>
                                        <th>Certifications</th>
                                        <th>Earliest Start Date</th>
                                        <th>Employment Type</th>
                                        <th>References</th>
                                        <th>Portfolio or Work Samples</th>
                                        <th>How Did You Hear About Us?</th>
                                        <th>Resume/CV</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tr>
                                        <td class="serial"><?php echo $i ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['position'] ?></td>
                                        <td><?php echo $row['location'] ?></td>
                                        <td><?php echo $row['linkedin'] ?></td>
                                        <td><?php echo $row['cover_letter'] ?></td>
                                        <td><?php echo $row['education'] ?></td>
                                        <td><?php echo $row['experience'] ?></td>
                                        <td><?php echo $row['employers'] ?></td>
                                        <td><?php echo $row['skills'] ?></td>
                                        <td><?php echo $row['certifications'] ?></td>
                                        <td><?php echo $row['start_date'] ?></td>
                                        <td><?php echo $row['employment_type'] ?></td>
                                        <td><?php echo $row['referencesname'] ?></td>
                                        <td><?php echo $row['portfolio'] ?></td>
                                        <td><?php echo $row['referral'] ?></td>
                                        <td><a href='serve_cv.php?id=<?php echo $row["id"]; ?>' target='_blank'>View CV</a></td>
                                        <td>
                                            <?php
                                            echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                    } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.inc.php');
?>