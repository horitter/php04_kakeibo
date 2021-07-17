// 月を１から１２まで取得する　＝　month
// 年を２０２１から２０２３まで取得　＝　year
let items = ["食費","日用品費","交際費","娯楽費","勉強費","その他固定費","特別支出"];
let incomes = ["給料","臨時収入"];
let inout = ["収入","支出"];

let ItemLength = items.length;
let inoutLength = inout.length;

// for (i = 0; i <2; i++) {
//     const INOUT = inout[i];
//     const select = '<option calss="option1">'+INOUT+'</option>';
//     $("#inout").append(select);
// }


    // let In = $("#in").val();
    // let Out = $("#out").val();
// itemの選択肢を表示

function incomeSelects(){
for (i = 0; i <inoutLength; i++) {
    const INCOME = incomes[i];
    const item2 = '<option>'+INCOME+'</option>';
    $("#item").append(item2);
}
}
   incomeSelects();

//  収支の項目が変更されたら実行される
   $("#inout").on("change",function(){
// 選択肢を一度空にする処理
    $("#item").empty(); 
// 親要素にけてあげる
    let inoutSelect = $("#inout").val();
　　
    if(inoutSelect === "支出"){
        for (i = 0; i <ItemLength; i++) {
    const ITEM = items[i];
    const item = '<option>'+ITEM+'</option>';
    $("#item").append(item);
        }
    } else if(inoutSelect === "収入"){
       incomeSelects();
    }
   });


// for (i = 0; i <ItemLength; i++) {
//     const ITEM = items[i];
//     const item = '<option>'+ITEM+'</option>';
//     $("#item").append(item);
// }

for (i = 1; i <13; i++) {
    const month = '<option>'+i+"月"+'</option>';
    $("#month").append(month);
    
}

for (i = 2021; i <2024; i++) {
    const year = '<option>'+i+"年"+'</option>';
    console.log(year);
    $("#year").append(year);
}


