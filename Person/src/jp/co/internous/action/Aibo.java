package jp.co.internous.action;

public class Aibo {
	public static void main(String[]args){
		Robot aibo=new Robot();
		aibo.name="aibo";

		System.out.println(aibo.name);
		aibo.tark();
		aibo.walk();
		aibo.run();
	}
}
