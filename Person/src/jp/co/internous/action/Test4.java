package jp.co.internous.action;

public class Test4 {
	public static void main(String[]args){

Person chigira=new Person();
chigira.name="千木良杏奈";
chigira.age=26;
chigira.phoneNumber="090-8149-2656";
chigira.address="滋賀";

System.out.println(chigira.name);
System.out.println(chigira.age);
System.out.println(chigira.phoneNumber);
System.out.println(chigira.address);
chigira.talk();
chigira.wark();
chigira.run();
	}
}
