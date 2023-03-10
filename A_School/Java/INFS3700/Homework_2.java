	package HomeworkComplete;

	import java.io.FileWriter;
	import java.io.IOException;
	import java.util.Scanner;

	public class ItsMe {

	public static void main(String[] args) {
		
		//Number of Questions
		//Defining Array
		final int questions = 3;					
		String[] facts = new String[questions];		
		
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
		
		//Math equation
		int x;
		int y;
		
		x = 5;
		y = 8;
		
		//Prints math equation
		System.out.println("\n" + x * y);
		
		//Defines where to write
		try {
		FileWriter writer = new FileWriter("MyInfo.txt");
		
		//Writes personal info in .txt
		writer.write(facts[0]);
		writer.write("\n");
		writer.write(facts[1]);
		writer.write("\n");
		writer.write(facts[2]);
		writer.write("\n");
			
		//Writes the math equation value in .txt
		writer.write("\n" + x * y);
			
		writer.close();
			
		} catch (IOException e) {
			e.printStackTrace();
		}
	
	
	
	}
		
}		