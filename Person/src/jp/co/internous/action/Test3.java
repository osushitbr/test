package jp.co.internous.action;

public class Test3 {
	public static void main(String[]args){

Person hanako=new Person();
hanako.name="鈴木花子";
hanako.age=16;
hanako.phoneNumber="090-1111-1111";
hanako.address="大阪";

System.out.println(hanako.name);
System.out.println(hanako.age);
System.out.println(hanako.phoneNumber);
System.out.println(hanako.address);
hanako.talk();
hanako.wark();
hanako.run();
	}
}
