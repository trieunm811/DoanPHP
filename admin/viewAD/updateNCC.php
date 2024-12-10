<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Nhà Cung Cấp</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Cập Nhật Nhà Cung Cấp</h2>
        <form action="indexAD.php?act=updateNCC" method="POST" class="bg-white p-6 rounded shadow">
            <input type="hidden" name="idnhacungcap" value="<?= $ncc['idnhacungcap'] ?>">
            <div class="mb-4">
                <label for="tenncc" class="block text-sm font-medium text-gray-700">Tên Nhà Cung Cấp</label>
                <input type="text" name="tenncc" id="tenncc" value="<?= $ncc['tennhacungcap'] ?>" required class="w-full p-2 border rounded mt-2">
            </div>
            <div class="mb-4">
                <label for="diachincc" class="block text-sm font-medium text-gray-700">Địa Chỉ</label>
                <input type="text" name="diachincc" id="diachincc" value="<?= $ncc['diachincc'] ?>" required class="w-full p-2 border rounded mt-2">
            </div>
            <div class="mb-4">
                <label for="sdt" class="block text-sm font-medium text-gray-700">Số Điện Thoại</label>
                <input type="text" name="sdt" id="sdt" value="<?= $ncc['sdt'] ?>" required class="w-full p-2 border rounded mt-2">
            </div>
            <button type="submit" name="capnhat" class="bg-blue-500 text-white px-4 py-2 rounded">Cập Nhật Nhà Cung Cấp</button>
        </form>
    </div>
</body>
</html>
