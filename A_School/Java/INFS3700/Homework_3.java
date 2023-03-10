package HomeworkComplete;

import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;

import javax.swing.JOptionPane;

public class homeWork4 {
public static void main(String[] args) {
		
		//Ask for Name
		String name = JOptionPane.showInputDialog("Enter your name");
		JOptionPane.showMessageDialog(null, "Hello! " + name);
		
		//Ask for age
		String age = JOptionPane.showInputDialog("Enter your age");
		JOptionPane.showMessageDialog(null, "You are "+age+" years old!");
		
		//Ask for any extra info
		int result = JOptionPane.showConfirmDialog(null, "Would you Like to add any extra information?", "User Confirmation", JOptionPane.YES_NO_OPTION);
		
		//Defines the ArrayList
		ArrayList<String> additionalInfo = new ArrayList<>();
		
		//If user hits yes
		while (result == JOptionPane.YES_OPTION) {	
			
			//Prompt user to add additional info
			String userInfo = JOptionPane.showInputDialog("Enter additional info");
			
			//As long as there was something put in the additional info box store in extraInfoList
			if (userInfo != null) {
				additionalInfo.add(userInfo);
			}
				
			//Display what information the user put in
			JOptionPane.showMessageDialog(null,"you added: " + userInfo);
				
			//Ask for any extra info
			result = JOptionPane.showConfirmDialog(null, "Would you like to add any extra information?", "Additional Information", JOptionPane.YES_NO_OPTION);
			}
		
		//Compiles the information taken from userInfo
		String additionalInfoPrint = new String();
		
		//Incrementing the index every time the loop goes through
		for (int index = 0; index < additionalInfo.size(); index += 1) {
		
		//Add a new line and then grab the item in the list with the index	
		additionalInfoPrint += "\n- " + additionalInfo.get(index);
		}
		
		//If user hits no display all data
		JOptionPane.showMessageDialog(null, "Name: " + name+ "\n" + "Age: " +age + "\n" + "Additional Info: " +  additionalInfoPrint);
		
		//Ask if the user would like to write the file 
		int resultTwo = JOptionPane.showConfirmDialog(null, "Would you like to write a file?", "File Writing", JOptionPane.YES_NO_OPTION);
		
		//If user chooses yes	
		if (resultTwo == JOptionPane.YES_OPTION) {
			
			//Ask what the user would like to name the file
			String fileName = JOptionPane.showInputDialog("What would you like to name the file?");
			JOptionPane.showMessageDialog(null, "Name: " + name+ "\n" + "Age: " +age + "\n" + "Additional Info: " +  additionalInfoPrint);
		
			//Write the file with the name the user inputs	
			try {
				FileWriter writer = new FileWriter(fileName);
				writer.write("Name: " + name+ "\n" + "Age: " +age + "\n" + "Additional Info: " +  additionalInfoPrint);
				writer.close();
				}
				catch(IOException e) {
					e.printStackTrace();
				}
				}
		
		//If user hits no display "thank you for playing!"
		if (resultTwo == JOptionPane.NO_OPTION);{
			JOptionPane.showMessageDialog(null,"Thank you for playing!");
		
		}			
	}
}

