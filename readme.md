- bootstrap.js: load cac thu vien, config...
- app.js: import file `.vue`, la file khoi tao ban dau cho project, thiet lap ve `data`, `method` vs pham vi la global => tim den `id = #app` 

- computed: được sử dụng gần giống như methods, computed vs method:
    + khi gọi computed ko có dấu `()`
    + ko có tham số -> chỉ sử dụng các dữ liệu có sẵn trong `data()`
    + computed sẽ chạy lại nếu các giá trị của biến bị thay đổi còn method thì khi gọi sự kiện mới thay đổi. điều đặc biệt là nó sẽ được cached nên giả sử bạn có 1 computed với hàng loạt tính toán, lặp trong đó, thì nếu các các biến phụ thuộc không thay đổi thì khi sử dụng nó sẽ chỉ mất thời gian tính 1 lần, những lần sau kết quả sẽ được sử dụng lại từ lần trước
    
- watch: giống trigger, thay đổi 1 thuộc tính trong Object thì sử dụng thông qua computed

- v-show | v-if:
    + v-show: add style display: none    
    + v-if ko render ra ngay ma` tùy vào giá trị còn v-show thì add thêm style display 
    + khi nào nên dùng v-show: nội dung trong block ít, trong quá trình sử dụng bị tác động nhiều    
    + khi nào nên dùng v-if: nội dung block nhiều + nhiều xử lý, nội dung ít thay đổi
- v-for:
    ```
    <li v-for="item in lits">
        {{ item }}
    </li>
    ```
    ```
    <li v-for="(item, index) in lits">
        {{ item }}
    </li>
    ```
    Loop an object Ex:
    
    ```
    myInfo: {
        name: 'My Name',
        age: '2x',
        country: 'vietnam'
    }
    
     <li v-for="item of myInfo">
        {{ item }}
    </li>
    
    <li v-for="(value, key) of myInfo">
        {{ key }} - {{ value }}
    </li>
    ```
- Check Object not null by this way:
    ```Object.keys(<objectName>).length !== 0```
    
- Emit multiple parameters to parent:
    ```
    this.$emit('userSelected', user, this.number, this.string)
    
    childrenSelectUser(user, number, string) {
        ...
    }
    ``` 
    or N parameters
    ```
    childrenSelectUser('test', ...arguments) #=> ...
    
    childrenSelectUser(text, user, number, string) { #=> sau do truyen du? tham so

    }
    ```
