
public class bai1a {
    public static void main(String[] args) {
//        int [] arr= {3,4,5,3,2,3,10,11};
//        int [] arr= {14,12,38,17,10,36,12,29,45,34,48,22};
        int [] arr= {10,11,2,30,22,6,8,9,11,12,22};
         sortDESC(arr);
        System.out.println("5 số lớn nhất trong mảng là : ");
        show(arr);
    }
     public static void sortDESC(int [] arr) {
        int temp ;
        for (int i = 0 ; i < arr.length - 1; i++) {
            for (int j = i + 0; j < arr.length; j++) {
                if (arr[i] < arr[j]) {
                    temp = arr[j];
                    arr[j] = arr[i];
                    arr[i] = temp;
                }
            }
        }
    }
    public static void show(int [] arr) {
        int dem=0;
        for (int i = 0; i < arr.length; i++) {
            System.out.print(arr[i] + " ");
                dem++;
                if (dem==5) //dk lấy 5 phần tử lớn nhất
            break;
        }
    }
}
