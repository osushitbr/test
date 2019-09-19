document.write("■問1");
document.write("<br>");
document.write("<br>");


function menseki(hankei,ensyuu=3.14){
    return(hankei*ensyuu)
}
document.write(menseki(5)+"<br>")
document.write(menseki(7)+"<br>")
document.write(menseki(10)+"<br>")





document.write("<br>");
document.write("<br>");
document.write("<br>");
document.write("■問2");
document.write("<br>");


function kingaku(group,otona,kodomo){
    return(group + "グループの合計金額は" + ((otona*500)+(kodomo*200)) + "円です。")
}
document.write(kingaku("A",2,4) + "<br>");
document.write(kingaku("B",1,5) + "<br>");
document.write(kingaku("C",3,7) + "<br>");