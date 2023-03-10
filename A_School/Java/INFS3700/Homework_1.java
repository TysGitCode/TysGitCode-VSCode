import java.util.Scanner;

public class ItsMePractice {

	public static void main(String[] args) {
	
		final int questions = 3;					//Number of Questions
		String[] facts = new String[questions];		//Defining Array
		
		//Scanner object
		Scanner keyboard = new Scanner(System.in);
		
		System.out.println("Please input your information");
		
		//Student Name
		System.out.println("Name:");
		facts[0] = keyboard.nextLine();
		
		//Student Major
		System.out.println("Major:");
		facts[1] = keyboard.nextLine();
		
		//Student birthplace
		System.out.println("Birthplace");
		facts[2] = keyboard.nextLine();
		
		//Display student credentials
		System.out.println("Your Student Info:");
		System.out.println("\n" + facts[0]);
		System.out.println(facts[1]);
		System.out.println(facts[2]);
		
		//Close keyboard Scanner
		keyboard.close();
		
		
		//Ending math equation
		int x;
		int y;
		
		x = 5;
		y = 8;
		
		System.out.println("\n" + x * y);
		

	}

}