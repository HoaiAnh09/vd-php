<?php $products = [
    ['name' => 'Sản phẩm 1', 'price' => '100000 VND'],
    ['name' => 'Sản phẩm 2', 'price' => '200000 VND'],
    ['name' => 'Sản phẩm 3', 'price' => '300000 VND'],
];
?>
<div class="product-list">
    <h2>Danh Sách Sản Phẩm</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?php echo $product['name']; ?>: <?php echo $product['price']; ?></li>
        <?php endforeach; ?>
    </ul>

    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><a href="#" class="edit">✏️</a></td>
                    <td><a href="#" class="delete">🗑️</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button onclick="alert('Thêm sản phẩm mới!')">+ Add New</button>
</div>
