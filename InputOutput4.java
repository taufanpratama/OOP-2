import java.util.Scanner;
 public class InputOutput4{
	public static void main(String[] args) {
		Scanner input = new Scanner (System.in);
		String nama;
		char jenisKelamin;
		int tinggiBadan;
		boolean menikah;
		
		System.out.print("Masukan Nama : ");
		nama = input.nextLine();
		
		System.out.print("Masukan Jenis Kelamin : ");
		
		jenisKelamin =
		input.next().charAt(0);
		
		System.out.print("Masukan Tinggi Badan : ");
		
		tinggiBadan = input.nextInt();
		
		System.out.print("Masukan Status Menikah : ");
		
		menikah = input.nextBoolean();
		
		}
	}