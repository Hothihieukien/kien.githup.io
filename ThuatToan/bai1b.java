import java.util.Scanner;
public class bai1b {
    static void nhap(){
        int a[];
        int n;
        Scanner sc= new Scanner(System.in);
        System.out.println("nhap so phan tu a[]: ");
        n=sc.nextInt();
        a=new int [n];
        for(int i=0; i<n; i++)
        {
            System.out.println("Nhap phan tu a["+i+"]= ");
            a[i]=sc.nextInt();
        }
        display(a);
    }
    static void display(int a[])
    {
        int max=0;
        int b[]=new int [a.length];// tạo mảng b có a.length phần tử=0
        for(int i=0;i<a.length;i++){
            for(int j=0;j<=i;j++)
                if(a[i]==a[j]) b[i]++;
        }
        //tim gia tri
        for(int i=0; i<a.length;i++)
            if(b[i]>max)max=b[i]; // tìm phần tử co số lần xuất hiện nhìu nhất
        for(int i=0; i<a.length;i++)
            if(b[i]==max)
                System.out.println("phan tu " +a[i]+ " xuat hien nhieu nhat ");
    }
    public static void main(String[] args) {
        nhap();
    }
    
}
