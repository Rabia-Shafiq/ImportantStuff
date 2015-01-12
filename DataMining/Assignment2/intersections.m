ct=1;
n=500;
 msg=sprintf('\n Itemsets \t Support count');
 fprintf(1,[msg]);
for i=15:n-1
    k=i+1;
 for j=k:n
A=SetMatrx(i,:);
B=SetMatrx(j,:);
C=intersect(A,B);
if(~isempty(C))
len=length(C);
end %end if
if len>=5
for dt=1:len
TidSets(ct,dt)=C(:,dt);
end
ct=ct+1;
nonz_row=nnz(TidSets);%Determin non-zero rows in form of matrix
%Tid_Set=Tid_Sets(nonz_row,:);
message1 = sprintf('\n ( %d , ',i);
msg2=sprintf(' %d)',j);
msg3=sprintf('\t\t %d',len);
 
 fprintf(1, [message1, msg2,msg3]);end
  end
end



