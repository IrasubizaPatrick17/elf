 <?php
                            $connect =mysqli_connect("localhost","root","","rlf");

                            //check connection
                            if(mysqli_connect_errno())
                            {
                                echo "Failed to connect to mysql:" .mysqli_connect_error();
                            }
                            if(isset($_POST["submit"]))
                            {
                                $file =$_FILES['file']['temp_name'];
                                $handle =fopen($file,"r");
                                if($handle){
                                        $line =0;
                                        if(filetype !="csv")
                                        {
                                            echo "try again";
                                        }
                                        while(($filesop =fgetcsv($handle ,2000,",")) !==false)
                                        {
                                            $suffix         =$suffix[0];
                                            $firstname      =$firstname[1];
                                            $lastname       =$lastname[2];
                                            $sex            =$sex[3];
                                            $companyname    =$companyname[4];
                                            $category       =$category[5];
                                            $title          =$title[6];
                                            $telephone      =$telephone[7];
                                            $email          =$email[8];
                                            $wife           =$wife[9];

                                            echo $firstname.$lastname.$suffix.$sex;
                            if($line ==0)
                            {
                                $line++;
                                continue;
                            }
                            $sql=mysql_query("insert into invitation(id,suffix,firstname,lastname,sex,companyname,category,title,telephone,email,wife) values
                                ('$null','$firstname','$lastname','$sex','$companyname','$category','$title','$telephone','$email','$wife')");
                                        
                                        }
                                        if($sql)
                                        {
                                            echo "You data has imported succesfull." . $c ."records";
                                        }
                                        else{
                                            echo "try agian";
                                        }
                                    
                                }
                            }
                            fclose($handle);
                         ?>
                         <form action="" method="post"  enctype="multipart/form-data">
                         <input type="file" name="file"><br>
                         <input type="type" name="submit" value="submit" class="btn btn-primary form-control" >
                             
                         </form>