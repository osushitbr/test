package jp.co.internous.action;

public class Test2 {
	public static void main(String[]args){

Person jiro=new Person();
jiro.name="木村次郎";
jiro.age=18;
jiro.phoneNumber="080-0000-0000";
jiro.address="埼玉";

System.out.println(jiro.name);
System.out.println(jiro.age);
System.out.println(jiro.phoneNumber);
System.out.println(jiro.address);
jiro.talk();
jiro.wark();
jiro.run();
}
}