<?php
                    require 'DbConfig.php';
                    if (isset($_GET['id'])) {
                        $vacID = $_GET['id'];
                        $sql = "DELETE FROM vaccinations WHERE vac_Id= '$vacID'";

                        if ($conn->query($sql) === TRUE) {
                            echo '<script language = "javascript">';
                            echo 'alert("Delete Success")';
                            echo '</script>';
                            header("location:vaccinationPortal.php");
                        } else {
                            echo '<script language = "javascript">';
                            echo 'alert("Unsuccessfull :( ")';
                            echo '</script>';
                        }
                        $conn->close();
                    }
                    ?>