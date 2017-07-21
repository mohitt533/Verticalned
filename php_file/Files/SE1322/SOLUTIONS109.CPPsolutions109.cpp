//captain tsubasa

#include<bits/stdc++.h>
using namespace std;

int main()
{
    int t; cin >> t;
    while(t--)
    {
        int n,x,y; char c; cin >> n >> x;
        stack<int> s; s.push(x);
        for (int i = 0; i < n; i++)
        {
            cin >> c;
            if (c == 'P')
            {
                cin >> x;
                s.push(x);
            }
            else
            {
                x = s.top();
                s.pop();
                y = s.top();
                s.push(x);
                s.push(y);
            }
        }
        cout << "Player " << s.top() << endl;
    }
    return 0;
}

//blissful pairs

#include<bits/stdc++.h>
using namespace std;

int main()
{
    int size;
    cin >> size;
    int num;
    stack<int> s;
    int count = 0;
    for(int i = 0;i < size;i++)
    {
        cin >> num;
        while(!s.empty() && num > s.top())
        {
           count++;
           s.pop();
        }
        if(!s.empty())
        {
            count++;
        }
        s.push(num);
    }
    cout << count << endl;
    return 0;
}

//team queue
#include <iostream>
#include <queue>

using namespace std;

int teamBelongTo[1000001];
queue<int> teamQueue[1001];
int main()
{
    int T = 1;
    int numTeams;
    while (cin >> numTeams, numTeams)
    {
        for (int t = 0; t < numTeams; ++t)
        {
            while (!teamQueue[t].empty())
                teamQueue[t].pop();
            int numElem;
            cin >> numElem;
            while (numElem--)
            {
                int elem;
                cin >> elem;
                teamBelongTo[elem] = t;
            }
        }
        
        queue<int> combinedQueue;
        
        cout << "Scenario #" << T++ << '\n';
        string command;
        while (cin >> command, command[0] != 'S')
        {
            if (command[0] == 'E')
            {
                int num;
                cin >> num;
                int team = teamBelongTo[num];
                if (teamQueue[team].empty())
                {
                    combinedQueue.push(team);
                }
                
                teamQueue[team].push(num);
            }
            else
            {
                int team = combinedQueue.front();
                cout << teamQueue[team].front() << '\n';
                teamQueue[team].pop();
                if (teamQueue[team].empty())
                    combinedQueue.pop();
            }
        }
        cout << '\n';
    }
}

//inorder traversal restoration
#include <bits/stdc++.h>
using namespace std;

string s;
void print(int l, int r)
{
    if (l > r) return;
    int nextlen = (r-l)/2;
    print(l, l + nextlen-1);
    cout << s[r];
    print(l + nextlen, r -1);
}
int main() {
    cin >> s;
    print(0, s.size()-1);
    return 0;
}

//inorder traversal of a binary tree
#include <bits/stdc++.h>
using namespace std;
int a[2000005];
void print(int node)
{
    if (!a[node]) return;
    print(node + node);
    cout << a[node] << " ";
    print(node + node + 1);
}
int main() {
    int n; cin >> n;
    for (int i = 1; i <= n; i++) cin >> a[i];
    print(1);
    return 0;
}

//greatest capacity
#include <bits/stdc++.h>
using namespace std;
typedef long long ll;
ll maxArea(vector<ll> &height) {
    ll end = height.size() - 1, start = 0;
    ll maxVol = 0;

    while(start < end)
    {
        maxVol = max(maxVol, (end - start) * min(height[start], height[end]));

        if (height[start] < height[end]) {
            start++;
        } else {
            end--;
        }
    }
    return maxVol;
}
int main()
{
	ll n; cin >> n; vector<ll> a(n);
	for (int i = 0; i < n; i++) cin >> a[i];
	cout << maxArea(a);
}

//onely sequence
#include <bits/stdc++.h>
using namespace std;
#define fastio ios::sync_with_stdio(0);cin.tie(0);cout.tie(0);
#define fileio freopen("in", "r", stdin);freopen("out", "w", stdout);
typedef long long ll;

vector<int> maxone(vector<int> Vec, int M)
{
    int N = Vec.size();
    int i = 0;
    int j = 0;
    int max_len = 0;
    int cnt = 0;
    vector<int> ans;
	int ans_start = 0; 
	int ans_end = 0;
    while(i < N) {
        if(cnt + (Vec[i] == 0) > M) {
            int temp_len = (i - j); // length from j to i - 1. 
            if(temp_len > max_len) {
                max_len = temp_len;
                ans_start = j;
				ans_end = i - 1;
            }
            while(i >= j && cnt + (Vec[i] == 0) > M) {
                cnt -= (Vec[j] == 0);
                j++;
            }
            cnt += (Vec[i] == 0);
        } else {
            cnt +=(Vec[i] == 0);
        }
        i++;
    }
    int temp_len = (i - j);
    if(temp_len > max_len) {
        temp_len = max_len;
   		ans_start = j;
    	ans_end = i - 1;
    }
	ans.push_back(ans_start);
	ans.push_back(ans_end);
	return ans;
}
int main()
{
  fastio
  vector<int> a;
  int n, m;
  cin >> n >> m;
  while(n--){
  	int x; cin >> x;
  	a.push_back(x);
  }
  auto ans = maxone(a, m);
  cout << ans[0]+1 << " " << ans[1]+1 << endl;
}

//quicksort inplace
#include<iostream>
#include<vector>


void quickSort(std::vector<int> &arr,int start,int end){
	if (start < end){
		int large = start;
		int pivot = end;
		for (auto i = start; i < end; ++i){
			if (arr[i] < arr[pivot]){
				int t = arr[i];
				arr[i] = arr[large];
				arr[large] = t;
				large = large+1<end?large+1:end;
			}
			else{
			}
		}
		int t = arr[large];
		arr[large] = arr[pivot];
		arr[pivot] = t;
		
		for (auto i : arr){
			std::cout << i << " ";
		}
		std::cout << "\n";
		quickSort(arr, start, large-1);
		quickSort(arr, large+1, end);
	}
}

int main(){
	int n;
	std::cin >> n;
	std::vector<int> arr;
	for (auto i = 0; i<n; ++i){
		auto val = 0;
		std::cin >> val;
		arr.push_back(val);
	}
	quickSort(arr,0,arr.size()-1);
	return 0;
}

//simple sorting

#include <bits/stdc++.h>
using namespace std;

bool cmp(string a, string b)
{
    if (a.size() != b.size()) return a.size() < b.size();
    return a < b;
}
int main() {
    int n, i;
    cin >> n;
    vector<string> arr;
    string item;
    while(n--)
    {
        cin >> item;
        arr.push_back(item);
    }
    sort(arr.begin(), arr.end(), cmp);
    for (auto x : arr)
        cout << x << endl;
    return 0;
}

//number of digits in n!
#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
using namespace std;


int main() {
    int n; cin >> n;
    double logg = 0;
    for (int i = 1; i <= n; i++) 
        logg += log10(i);
    cout << (int)(floor(logg) + 1);
    return 0;
}
