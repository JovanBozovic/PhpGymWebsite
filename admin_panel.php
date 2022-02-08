<form class="" action="index.php?page=admin_panel" method="post">


 <table class="table table-striped table-bordered padisng table-hover">
                                     <thead>
                                         <tr>
                                             <th>#</th>
                                             <th>Username</th>
                                             <th>First Name</th>
                                             <th>Last Name</th>
                                              <th>Email</th>
                                              <th>Phone</th>
                                               <th>Is Admin</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                     <?php


                                     $users = executeQuery("SELECT * FROM korisnik");

                                     $html = "";

                                     foreach ($users as $user){
                                         $html .= "<tr>
                                             <td>$user->korisnik_id</td>
                                             <td>$user->username</td>
                                             <td>$user->name</td>
                                             <td>$user->lastname</td>
                                             <td>$user->email</td>
                                             <td>$user->phone</td>

                                             <td>";
                                             if($user->is_admin){

                                               $html.= "<input class='visible1 is_admin' type='checkbox' checked='true' />";
                                             }else{
                                               $html.= "<input class='visible1 is_admin'  type='checkbox'/>";
                                             }
                                             $html.="

                                             </td>
                                         </tr>";
                                     }

                                     echo $html;


                                     ?>

                                     </tbody>
                                     <input type="hidden" name="ids" value="">
                                     <button class="zzz" id="formica" type="submit" name="Obrada">Obrada</button>
                                 </table>


</form>
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

</div>
