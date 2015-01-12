%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Reduce an image applying Gaussian Pyramid.
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
function IResult = reduce(I, Wt)

[h w]= size(I);

hnew = ceil(h * 0.5);
wnew = ceil(w * 0.5);

%% Pad the boundaries. 

I = [ I(1,:) ; I(2,:) ;  I ; I(h-1,:);  I(h,:) ];  % Add two rows towards the beginning and the end.
I = [ I(:,1)  I(:,2)     I   I(:, w -1)  I(:,w) ];  % Add two columns towards the beginning and the end.

I = double(I);

IResult = zeros(hnew, wnew); % Initialize the array in the beginning ..
for i = 0 : hnew -1 
    for j = 0 : wnew -1 
        A = [];
        for m = -2 : 2
            for n = -2 : 2 
                tmpval =  I (2 * i + m + 3, 2 * j + n + 3 ) * Wt(m + 3) * Wt(n + 3);
                A =  [A,  tmpval] ;
            end
        end
        IResult(i + 1, j + 1)= sum(A); 
        % Bad array arithmetic - Matlab array indices start at 1.
        % and the algorithm assumes 0. Hence got to do it.
    end
end
