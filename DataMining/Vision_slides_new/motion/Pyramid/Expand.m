%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Expand an image as per the Gaussian Pyramid.
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
function IResult = expand(I, Wt)

[h w]= size(I);

hnew = ceil(h * 2);
wnew = ceil(w * 2);

%% Pad the boundaries. 

I = [ I(1,:) ;  I ;  I(h,:) ];  % Pad the top and bottom rows.
I = [ I(:,1)    I    I(:,w) ];  % Pad the left and right columns.

I = double(I);

IResult = zeros(hnew, wnew); % Initialize the array in the beginning ..
for i = 0 : hnew - 1 
%   fprintf('\n %d', i);
    for j = 0 : wnew - 1 
        A = [];
        for m = -2 : 2
            for n = -2 : 2
                pixeli = (i - m)/2 ;
                pixelj = (j - n)/2 ;
                if ( (floor(pixeli) == pixeli) & (floor(pixelj) == pixelj ) & pixeli >= 0 & pixelj >= 0 )
                    pixeli = pixeli + 1;
                    pixelj = pixelj + 1;
                    tmpval =  I (pixeli, pixelj) * Wt(m + 3) * Wt(n + 3);
                    A =  [A,  tmpval] ;
                end
            end
        end
        IResult(i + 1, j + 1)= 4 * sum(A); 
        % Bad array arithmetic - Matlab array indices start at 1.
        % and the algorithm assumes 0. Hence got to do it.
    end
end