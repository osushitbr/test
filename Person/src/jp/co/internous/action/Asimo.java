package jp.co.internous.action;

public class Asimo {
	public static void main(String[]args){
		Robot asimo=new Robot();
		asimo.name="asimo";

		System.out.println(asimo.name);
		asimo.tark();
		asimo.walk();
		asimo.run();
	}
}
