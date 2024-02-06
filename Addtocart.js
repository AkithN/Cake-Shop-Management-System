const product = [
    {
        id: 0,
        image: 'cake1.png',
        title: 'Cake1',
        price: 3000.00,
    },
    {
        id: 1,
        image: 'cake2.png',
        title: 'Cake2',
        price: 3000.00,
    },
    {
        id: 2,
        image: 'cake3.png',
        title: 'Cake3',
        price: 3000.00,
    },
    {
        id: 3,
        image: 'cake4.png',
        title: 'Cake4',
        price: 7000.00,
    },
    {
        id: 4,
        image: 'cake5.png',
        title: 'Cake5',
        price: 2000.00,
    },
    {
        id: 5,
        image: 'cake6.png',
        title: 'Cake6',
        price: 3000.00,
    },
    {
        id: 6,
        image: 'cake7.png',
        title: 'Cake7',
        price: 2300.00,
    },
    {
        id: 7,
        image: 'cake8.png',
        title: 'Cake8',
        price: 2900.00,
    },
    {
        id: 8,
        image: 'cake9.png',
        title: 'Cake9',
        price: 2900.00,
    },
    {
        id: 9,
        image: 'cake10.png',
        title: 'Cake10',
        price: 3900.00,
    },
    {
        id: 10,
        image: 'cake11.png',
        title: 'Cake11',
        price: 3000.00,
    },
    {
        id: 11,
        image: 'cake12.png',
        title: 'Cake12',
        price: 4000.00,
    }
];
const categories = [...new Set(product.map((item)=>
{return item}))]
let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var{image,title,price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class = 'bottom'>
            <p>${title}</p>
            <h2>${price}.00</h2>`+
            "<button onclick='Addtocart("+(i++)+")'>Add to cart</button>"+
            `</div>
            </div>`
    )
}).join('')

var cart = [];

function Addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length == 0){
        document.getElementById('cartItem').innerHTML = "Your Cart Is Empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var{image,title,price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$" + total +".00";
            return(
                `<div class = 'cart-item'>
                <div class = 'row-img'>
                <img class = 'rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size:15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }
}
