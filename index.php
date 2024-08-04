<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "ikn";

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    die("ERROR : ". mysqli_connect_error());
}

function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['kirim'])){
    $mess = input($_POST['mess']);

    if(!empty($mess)){
        $query = "INSERT INTO ikndb (id, message) VALUES ('', '$mess')";

    $hasil = $conn->query($query);

    if($hasil){
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                  title: 'Sukses!',
                  text: 'Pesan Berhasil Terkirim !',
                  icon: 'success',
                  confirmButtonText: 'OK'
                });
                });
            </script>";
    }
    }
    else{
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Pesan Tidak Boleh kosong !',
                  confirmButtonText: 'OK'
                    });
                });
            </script>";
    }

    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="h-screen bg-slate-700 relative">

            <div class="d-flex bg-slate-800 p-4 w-100 flex items-center text-white justify-evenly text-center">
                <div class="flex items-center gap-2">
                    <img src="./assets/logo2.png" alt="logo" class="h-16">
                    <p class="plr">Idak Kan Ngicu</p>
                </div>
                <div>
                    <button type="button" data-modal-target="static-modal" data-modal-toggle="static-modal"  class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">About</button>
                </div>
            </div>

            <form action="" method="post">

                <div class="flex justify-center items-center py-52 ">
                    <div class="h-64 w-80 bg-white flex justify-center items-center rounded-2xl relative text-white text-center">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-500 absolute top-0 w-full h-24 rounded-t-lg items-center flex justify-center font-bold">Apo Ajo Sanak !</div>
                        <textarea name="mess" id="" class="py-14 w-full rounded-b-lg border-none outline-none absolute bottom-0 text-xl font-bold bg-white text-black p-4 resize-none" placeholder="Write here..." maxlength="100"></textarea>
                        <div class="absolute bottom-0 right-0 text-black  p-5">
                            <button name="kirim" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
       

        



        <!-- Main modal -->
        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            What is IKN (Idak Kan Ngicu) ?
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            IKN (Idak Kan Ngicu) "Express your feelings without fear"
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Idak Kan Ngicu (IKN) is an anonymous platform that allows users to share their feelings, thoughts, and questions without worrying about their identity. With NGL, you can interact honestly and openly, creating a supportive and trustworthy environment.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Back</button>
                    </div>
                </div>
            </div>
        </div>

        

<footer class="bg-white rounded-lg shadow m-4 absolute bottom-0 justify-center items-center dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between items-center justify-center">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://instagram.com/rayhanma__" target="_blank" class="hover:underline">Mr22xx™</a>. All Rights Reserved
      <span>inspired by NGL</span>
    </span>
    
    </ul>
    </div>
</footer>


        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>