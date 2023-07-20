public class strongnum{
	public static void main (String[] args) {
		
		static int mymethod(int x) {
		int j=1;
		for (int i=x; i>0; i--) {
			j*= i;
		}
		return j;
	}

	public static void main(String[]args) {
		 String num = "145";
		 String[] a= num.split("");
		 int b= Integer.parseInt(num);
		 int facTotal =0;
		 
		 for(String z : a) {
			 facTotal+= mymethod(Integer.parseInt(z));
		 }
		
		System.out.println(facTotal == b);
}
}