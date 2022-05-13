<?php require "components/head.php"; ?>
<?php
require "app/controller/ViewController.php";
use App\Controller\ViewController;

$fetch = new ViewController();
$responses = $fetch->fetch("users", "role=1");
?>

<div class="flex">
    <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
        <h2 class="text-3xl font-semibold text-center text-blue-800">Admin</h2>
        <div class="flex flex-col justify-between mt-6">
            <aside>
                <ul>
                    <li>
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="admin.php">
                            <span class="mx-4 font-medium">Daftar Anggota</span>
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="w-full h-full p-4 m-8 overflow-y-auto">
        <h1 class="font-medium text-2xl">Daftar Anggota</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Telepon
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($responses as $response) { ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    <?= $response['nama'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $response['email'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $response['telepon'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $response['alamat'] ?>
                </td>
                <td class="px-6 py-4 flex gap-2">
                    <a href="editAnggota.php?editId=<?= $response['id'] ?>" class="p-2 bg-yellow-500 text-white" type="button">
                        Edit
                    </a>
                    <a href="deleteanggota.php?deleteId=<?= $response['id'] ?>" class="p-2 bg-red-500 text-white" type="button">
                        Hapus
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>





