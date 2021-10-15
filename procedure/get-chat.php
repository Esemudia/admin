<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "conn.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat">
                                <div class="chat-avatar">
                                <a class="avatar">
                                </a>
                                </div>
                                <div class="chat-body">
                                <div class="chat-text">
                                    <p>'. $row['msg'] .'</p>
                                    </div>
                                    <div class="chat-text">
                                      <p>Thanks.</p>
                                    </div>
                                  </div>
                                </div>';
                }else{
                    $output .= '<div class="chat chat-right">
                                <div class="chat-avatar">
                                <a class="avatar">
                                    <!-- <img src="../../../app-assets/images/user/12.jpg" class="circle" alt="avatar" /> -->
                                </a>
                                </div>
                                <div class="chat-body">
                                <div class="chat-text">
                                    <p>'. $row['msg'] .'</p>
                                    </div>
                                    </div>
                                  </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>
 
                      
                          