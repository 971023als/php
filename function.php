<?php
//한 유저가 한 게시물에 좋아요를 눌렀는지 안눌렀는지 체크해주는 함수
// user_id 와 특정 content_id로 조회해서 값이 있으면 좋아요 버튼 누른것 
// 없으면 안누른것

function is_user_has_already_like_content($connect, $user_id, $content_id){
    $query = "        select * from user_content_like        
                    where content_id = :content_id       
                    and user_id = :user_id;";        
                    
                    
                    $statement = $connect -> prepare($query);        
                    $statement -> execute(                           
                         array(':content_id' => $content_id, ':user_id'=> $user_id)                       
                          );        
                          $total_rows =  $statement -> rowCount();   

                          //값이 있으면        
                          if($total_rows >0){            
                              return true;        
                              }else        
                              {            
                                  return false;       
                                   }
                                   }        
                                   
                                   // 게시물이 좋아요 몇번 받았는지 반환       
                                    function count_content_like($connect, $content_id){               
                                        
                                        $query ="                    
                                        select * from user_content_like                    
                                        where content_id =:content_id";                    
                                        
                                        $statement = $connect ->prepare($query);                   
                                         $statement -> execute(                        
                                             array(':content_id'=> $content_id)                   
                                              );                
                                              
                                              $total_rows = $statement -> rowCount();               
                                               return $total_rows;            
                                               }
                                               
                                               ?>
