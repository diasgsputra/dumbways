#include <iostream>
using namespace std;
int prima(int awal,int x);
int main(){
	int input,i,j,bil,angka_terakhir=0,angka;
	bool lanjut;
	cin>>input;
	for(i=0;i<=input+1;i++){
		j=0;
		while(j<i){
			angka = angka_terakhir;
			lanjut = true;
			while (lanjut) {
        		if ((angka==2 or angka==3 or angka==5 or angka==7 or angka==11 or angka==13 or angka==17 or angka==19 or angka==23 or angka==29 or angka==31 or angka==37 or angka==41 or angka==43 or angka==47) or (angka%2 != 0 and angka%3 != 0 and angka%5 != 0 and angka%7 != 0 and angka%11!=0 and angka%13!=0 and angka%17!=0 and angka%19!=0 and angka%23!=0 and angka%29!=0 and angka%37!=0 and angka%39!=0 and angka%41!=0 and angka%43!=0 and angka%47!=0)) {
            		if(angka == 1 || angka ==0){
            			
					}
					else{
						cout << angka <<" ";
            			lanjut = false;	
					}
        		}
        		angka++;
    		}
    		angka_terakhir = angka;
    		j++;
		}
		cout<<endl;
	}
}

